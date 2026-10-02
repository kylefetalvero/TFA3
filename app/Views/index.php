<!DOCTYPE html>
<html>
<head>
    <title>Management System</title>
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

        <h1>Today's Tasks</h1>
        <p class="subtitle">Tasks scheduled for today.</p>

        <table>
            <tr>
                <th>Task</th>
                <th>Status</th>
                <th>Date</th>
            </tr>

            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= esc($task['title']) ?></td>

                    <td>
                        <span class="badge">
                            <?= esc($task['status']) ?>
                        </span>
                    </td>

                    <td><?= esc($task['task_date']) ?></td>
                </tr>
            <?php endforeach; ?>

        </table>

    </div>

</div>

</body>
</html>