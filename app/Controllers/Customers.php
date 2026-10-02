<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();

        $customers = $customerModel
            ->orderBy('full_name', 'ASC')
            ->findAll();

        return view('customers', [
            'customers' => $customers
        ]);
    }

    public function new()
    {
        return view('customer_form');
    }

    public function create()
    {
        $customerModel = new CustomerModel();

        $rules = [
            'full_name' => 'required',
            'email'     => 'required|valid_email'
        ];

        if (!$this->validate($rules)) {
            return redirect()
        ->back()
        ->withInput()
        ->with('errors', $this->validator->listErrors());
}

        $customerModel->insert([
            'full_name'  => $this->request->getPost('full_name'),
            'email'      => $this->request->getPost('email'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/customers');
    }

    public function edit($id)
{
    $customerModel = new CustomerModel();

    $customer = $customerModel->find($id);

    if (!$customer) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Customer not found');
    }

    return view('customer_edit', [
        'customer' => $customer
    ]);
}

public function update($id)
{
    $customerModel = new CustomerModel();

    $rules = [
        'full_name' => 'required',
        'email'     => 'required|valid_email'
    ];

    if (!$this->validate($rules)) {
        return redirect()
            ->back()
            ->withInput()
            ->with('errors', $this->validator->listErrors());
    }

    $customerModel->update($id, [
        'full_name'  => $this->request->getPost('full_name'),
        'email'      => $this->request->getPost('email'),
        'updated_at' => date('Y-m-d H:i:s')
    ]);

    return redirect()->to('/customers');
}
}