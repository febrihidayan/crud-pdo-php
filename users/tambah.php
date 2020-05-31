<?php require_once '../templates/header.php'; ?>
<h1>Tambah User</h1>
<a href="/users">Kembali</a>
<br>
<br>
<form action="" method="post">
    <p>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="">
    </p>
    <p>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="">
    </p>
    <p>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="">
    </p>
    <button type="submit" name="simpan">Simpan</button>
</form>
<?php

if (isset($_POST['simpan'])) {
    $query = $conn->prepare("INSERT INTO users(name, email, password) VALUES(
        '" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "'
    )");

    if ($query->execute()) {
        header("Location:/users");
    } else {
        echo "terjadi kesalahan query";
    }
}

require_once '../templates/footer.php'; ?>