<?php require_once '../templates/header.php'; ?>
<h1>All Users</h1>
<a href="/users/tambah.php">Tambah user</a>
<br>
<br>
<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $users = $conn->prepare("SELECT * FROM users");
            $users->execute();
            while($user = $users->fetch(PDO::FETCH_OBJ)) {
        ?>
        <tr>
            <td><?= $user->id; ?></td>
            <td><?= $user->name; ?></td>
            <td><?= $user->email; ?></td>
            <td><?= $user->password; ?></td>
            <td>
                <a href="/users/edit.php?id=<?= $user->id; ?>">Edit</a>
                <a href="/users/show.php?id=<?= $user->id; ?>">Show</a>
                <a href="/users/?hapus&id=<?= $user->id; ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php

if (isset($_GET['hapus'])) {
    if ($_GET['id']) {
        $query = $conn->prepare("DELETE FROM users WHERE id = " . $_GET['id']);
        if ($query->execute()) {
            header('Location:/users');
        }
    }
}

require_once '../templates/footer.php'; ?>