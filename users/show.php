<?php require_once '../templates/header.php';

$user = $conn->prepare("SELECT * FROM users WHERE id = " . $_GET['id']);
$user->execute();
$user = $user->fetch(PDO::FETCH_OBJ);

?>
<h1>Edit User</h1>
<a href="/users">Kembali</a>
<br>
<br>
<pre>
    Id: <?= $user->id;?>
</pre>
<pre>
    Name: <?= $user->name;?>
</pre>
<pre>
    Email: <?= $user->email;?>
</pre>
<pre>
    Password: <?= $user->password;?>
</pre>
<?php require_once '../templates/footer.php'; ?>