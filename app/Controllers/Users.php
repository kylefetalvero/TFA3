<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $user = $userModel->first();

        return view('profile', [
            'user' => $user
        ]);
    }

    public function accounts()
    {
        $userModel = new UserModel();

        $users = $userModel
            ->orderBy('username', 'ASC')
            ->findAll();

        return view('users', [
            'users' => $users
        ]);
    }

    public function new()
{
    return view('user_form');
}

public function create()
{
    $userModel = new UserModel();

    $rules = [
        'username'  => 'required|is_unique[users.username]',
        'full_name' => 'required',
        'email'     => 'required|valid_email'
    ];

    if (!$this->validate($rules)) {
        return redirect()
            ->back()
            ->withInput()
            ->with('errors', $this->validator->listErrors());
    }

    $userModel->insert([
        'username'  => $this->request->getPost('username'),
        'full_name' => $this->request->getPost('full_name'),
        'created_at' => date('Y-m-d H:i:s')
    ]);

    return redirect()->to('/users');
}

public function edit($id)
{
    $userModel = new UserModel();

    $user = $userModel->find($id);

    if (!$user) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('User not found');
    }

    return view('user_edit', [
        'user' => $user
    ]);
}

public function update($id)
{
    $userModel = new UserModel();

    $user = $userModel->find($id);

    if (!$user) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('User not found');
    }

    $rules = [
        'username'  => 'required|is_unique[users.username,id,' . $id . ']',
        'full_name' => 'required'
        
    ];

    $avatar = $this->request->getFile('avatar');

    // Validate avatar only if a new file was selected
    if ($avatar && $avatar->getError() !== UPLOAD_ERR_NO_FILE) {
        $rules['avatar'] = [
            'uploaded[avatar]',
            'is_image[avatar]',
            'mime_in[avatar,image/jpg,image/jpeg,image/png]',
            'max_size[avatar,2048]',
            'ext_in[avatar,jpg,jpeg,png]'
        ];
    }

    if (!$this->validate($rules)) {
        return redirect()
            ->back()
            ->withInput()
            ->with('errors', $this->validator->listErrors());
    }

    $data = [
        'username'  => $this->request->getPost('username'),
        'full_name' => $this->request->getPost('full_name'),
        'email' => $this->request->getPost('email')
    ];

    // Process avatar if a new file was uploaded
    if ($avatar && $avatar->isValid() && !$avatar->hasMoved()) {

        $newName = $avatar->getRandomName();

        $avatar->move(FCPATH . 'uploads', $newName);

        // Prepare a display-ready 300x300 version
        $image = service('image');

        $image->withFile(FCPATH . 'uploads/' . $newName)
              ->fit(300, 300, 'center')
              ->save(FCPATH . 'uploads/' . $newName);

        // Save only the filename in the database
        $data['avatar'] = $newName;
    }

    $userModel->update($id, $data);

    return redirect()->to('/users');
}
}