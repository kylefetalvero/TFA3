<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
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

    <h1>Edit User</h1>

    <?php if (session()->getFlashdata('errors')): ?>
        <div class="errors">
            <?= session()->getFlashdata('errors') ?>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('users/update/' . $user['id']) ?>" method="post" enctype="multipart/form-data">

        <?= csrf_field() ?>

        <div>
            <label for="username">Username</label>
            <input
                type="text"
                id="username"
                name="username"
                value="<?= old('username', $user['username']) ?>"
            >
        </div>

        <br>

        <div>
            <label for="full_name">Full Name</label>
            <input
                type="text"
                id="full_name"
                name="full_name"
                value="<?= old('full_name', $user['full_name']) ?>"
            >
        </div>

        <br>

        <div>
            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                value="<?= old('email', $user['email']) ?>"
            >
        </div>

        <br>

        <div>
            <label for="avatar">Profile Picture</label>
            <input
                type="file"
                id="avatar"
                name="avatar"
                accept=".jpg,.jpeg,.png"
    >
            <small>JPG or PNG only, maximum 2MB.</small>
        </div>

        <br>

        <button type="submit">Update User</button>

    </form>

</div>

</body>
</html>