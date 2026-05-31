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

<?php

session_start();

if(!isset($_SESSION['admin_login'])){

header("Location: login.php");

exit();

}

include 'db.php';
if(isset($_GET['id'])){

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM contactus WHERE id='$id'");

$row = mysqli_fetch_assoc($result);

}else{

header("Location: contacts.php");

exit();

}
?>
    <section class="kc-edit-section">

<div class="kc-edit-box">

<div class="kc-edit-title">

<h2>Edit Contact Message</h2>

<p>
Update contact form details.
</p>
<a href="contacts.php" class="kc-back-btn">
<i class="fa-solid fa-arrow-left"></i>
Back Dashboard
</a>
</div>

<form method="POST">

<div class="kc-edit-group">

<label>Name</label>

<input type="text"
name="name"
value="<?php echo $row['name']; ?>"
required>

</div>

<div class="kc-edit-group">

<label>Mobile Number</label>

<input type="text"
name="mobile"
value="<?php echo $row['mobile']; ?>"
required>

</div>

<div class="kc-edit-group">

<label>Message</label>

<textarea name="message"
rows="5"><?php echo $row['message']; ?></textarea>

</div>

<button type="submit"
name="update"
class="kc-update-btn">

Update Message

</button>

</form>

</div>

</section>
</body>
</html>

<?php

if(isset($_POST['update'])){

$name = $_POST['name'];

$mobile = $_POST['mobile'];

$message = $_POST['message'];

$update = "UPDATE contactus SET

name='$name',
mobile='$mobile',
message='$message'

WHERE id='$id'";

mysqli_query($conn,$update);

header("Location: contacts.php");

exit();

}

?>