<!DOCTYPE html>
<html>
<head>
    <title>About</title>
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

        <h1>About the System</h1>
        <p class="subtitle">Tasks for Today Management System</p>

        <p>
            This system was developed using CodeIgniter 4
            and MySQL.
        </p>

        <br>

        <p>
            <strong>Developed by:</strong> Sean Kyle Fetalvero
        </p>

    </div>

</div>

</body>
</html>