<!doctype html>
<html>
<head>
<title>Admin Login</title>
</head>
<body>

<h2>Admin Login</h2>

<form method="POST" action="admin_login.php">

<input type="text" name="username" placeholder="Username"><br><br>
<input type="password" name="password" placeholder="Password"><br><br>

<button type="submit">Login</button>

</form>

<?php
include 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username='$user' AND password='$pass'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    header("Location: admin.php");
    exit();
} else {
    echo "Wrong login!";
}
}
?>

</body>
</html>