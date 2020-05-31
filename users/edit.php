<?php require_once '../templates/header.php'; 

$user = $conn->prepare("SELECT * FROM users WHERE id = " . $_GET['id']);
$user->execute();
$user = $user->fetch(PDO::FETCH_OBJ);

?>
<h1>Edit User</h1>
<a href="/users">Kembali</a>
<br>
<br>
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $user->id;?>">
    <p>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= $user->name;?>">
    </p>
    <p>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= $user->email;?>">
    </p>
    <p>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="<?= $user->password;?>">
    </p>
    <button type="submit" name="simpan">Perbarui</button>
</form>
<?php

if (isset($_POST['simpan'])) {
    $query = $conn->prepare("UPDATE users SET
        name = '" . $_POST['name'] . "', email = '" . $_POST['email'] . "', password = '" . $_POST['password'] . "'
        WHERE id = ". $_POST['id']);

    if ($query->execute()) {
        header("Location:/users");
    } else {
        echo "terjadi kesalahan query";
    }
}

require_once '../templates/footer.php'; ?>