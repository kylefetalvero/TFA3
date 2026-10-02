<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
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

    <h1>User Accounts</h1>

    <a href="<?= site_url('users/new') ?>">
        <button type="button">Add New User</button>
    </a>

    <br><br>

    <?php if (empty($users)): ?>

        <p>No users found.</p>

    <?php else: ?>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Avatar</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= esc($user['id']) ?></td>
                        <td><?= esc($user['username']) ?></td>
                        <td><?= esc($user['full_name']) ?></td>
                        <td><?= esc($user['email']) ?></td>

                        <td>
                            <?php if (!empty($user['avatar'])): ?>
                                <img
                                    src="<?= base_url('uploads/' . $user['avatar']) ?>"
                                    width="80"
                                    alt="User Avatar"
                                >
                            <?php else: ?>
                                No avatar
                            <?php endif; ?>
                        </td>

                        <td>
                            <a href="<?= site_url('users/edit/' . $user['id']) ?>">
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