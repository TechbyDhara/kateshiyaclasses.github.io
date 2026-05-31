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

/* GET DATA */

if(isset($_GET['id'])){

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM admissions WHERE id='$id'");

$row = mysqli_fetch_assoc($result);

}else{

header("Location: admissions.php");

exit();

}
?>


<section class="kc-edit-section">

<div class="kc-edit-box">

<div class="kc-edit-title">

<h2>Edit Admission</h2>

<p>
Update student admission details.
</p>
<a href="admissions.php" class="kc-back-btn">
<i class="fa-solid fa-arrow-left"></i>
Back Dashboard
</a>
</div>

<form method="POST">

<div class="kc-edit-group">

<label>Student Name</label>

<input type="text"
name="name"
value="<?php echo $row['name']; ?>"
required>

</div>

<div class="kc-edit-group">

<label>Parent Name</label>

<input type="text"
name="pname"
value="<?php echo $row['pname']; ?>"
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

<label>Standard</label>

<input type="text"
name="std"
value="<?php echo $row['std']; ?>"
required>

</div>

<div class="kc-edit-group">

<label>School</label>

<input type="text"
name="school"
value="<?php echo $row['school']; ?>"
required>

</div>

<div class="kc-edit-group">

<label>Address</label>

<textarea name="address"
rows="4"><?php echo $row['address']; ?></textarea>

</div>

<div class="kc-edit-group">

<label>Status</label>

<select name="status">

<option value="Pending"
<?php if($row['status']=="Pending"){ echo "selected"; } ?>>

Pending

</option>

<option value="Approved"
<?php if($row['status']=="Approved"){ echo "selected"; } ?>>

Approved

</option>

<option value="Rejected"
<?php if($row['status']=="Rejected"){ echo "selected"; } ?>>

Rejected

</option>

</select>

</div>

<button type="submit"
name="update"
class="kc-update-btn">

Update Admission

</button>

</form>

</div>

</section>


<?php
/* UPDATE DATA */

if(isset($_POST['update'])){

$name = $_POST['name'];

$pname = $_POST['pname'];

$mobile = $_POST['mobile'];

$std = $_POST['std'];

$school = $_POST['school'];

$address = $_POST['address'];

$status = $_POST['status'];

$update = "UPDATE admissions SET

name='$name',
pname='$pname',
mobile='$mobile',
std='$std',
school='$school',
address='$address',
status='$status'

WHERE id='$id'";

mysqli_query($conn,$update);

header("Location: admissions.php");

exit();

}

?>
</body>
</html>