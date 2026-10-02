<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>

<nav class="navbar">
    <h2>TFA3</h2>

    <div>
        <a href="<?= base_url() ?>">Home</a>
        <a href="<?= site_url('tasks') ?>">Tasks</a>
        <a href="<?= site_url('profile') ?>">Profile</a>
        <a href="<?= site_url('customers') ?>">Customers</a>
        <a href="<?= site_url('users') ?>">Users</a>
        <a href="<?= site_url('about') ?>">About</a>
    </div>
</nav>

<div class="container">

    <h1>Customer Accounts</h1>

    <a href="<?= site_url('customers/new') ?>">
        <button type="button">Add New Customer</button>
    </a>

    <br><br>

    <?php if (empty($customers)): ?>

        <p>No customers found.</p>

    <?php else: ?>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= esc($customer['id']) ?></td>
                        <td><?= esc($customer['full_name']) ?></td>
                        <td><?= esc($customer['email']) ?></td>
                        <td><?= esc($customer['created_at']) ?></td>
                        <td>
    <a href="<?= site_url('customers/edit/' . $customer['id']) ?>">
        Edit
    </a>
</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <?php endif; ?>

</div>

</body>
</html>