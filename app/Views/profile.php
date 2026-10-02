<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
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

    <div class="card">

        <h1>My Profile</h1>
        <p class="subtitle">User account information.</p>

        <p><strong>Username:</strong> <?= esc($user['username']) ?></p>

        <p><strong>Full Name:</strong> <?= esc($user['full_name']) ?></p>

        <p><strong>Email:</strong> <?= esc($user['email']) ?></p>

    </div>

</div>

</body>
</html>