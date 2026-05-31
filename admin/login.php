<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <section class="admin-login-section">
<div class="admin-login-box">
<div class="admin-login-title">
<h2>Admin Login</h2>
<p>
Login to manage Kateshiya Classes website.
</p>
</div>
<form method="POST">
<div class="admin-group">
<label>Username</label>
<input type="text"
name="username"
placeholder="Enter username"
required>
</div>
<div class="admin-group">
<label>Password</label>
<input type="password"
name="password"
placeholder="Enter password"
required>
</div>
<button type="login"
name="login"
class="admin-login-btn">
Login
</button>
</form>

<?php

session_start();

include 'db.php';

$error = "";

if(isset($_POST['login'])){

$username = $_POST['username'];

$password = $_POST['password'];

$sql = "SELECT * FROM admin
WHERE username='$username'
AND password='$password'";

$result = mysqli_query($conn,$sql);

$count = mysqli_num_rows($result);

if($count > 0){

$_SESSION['admin_login'] = true;

$_SESSION['admin_username'] = $username;

header("Location: dashboard.php");

exit();

}else{

$error = "Invalid Username or Password";

}

}
 if($error != ""){ ?>

<div class="login-error">

<?php echo $error; ?>

</div>

<?php } ?>

</div>
</section>

</body>
</html>
