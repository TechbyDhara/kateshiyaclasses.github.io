
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

?>

<?php

include 'db.php';

$result = mysqli_query($conn,"SELECT * FROM admissions ORDER BY id DESC");

?>

<section class="kc-dashboard">

<div class="container-fluid">

<div class="row">

<!-- SIDEBAR -->

<?php include 'sidebar.php'; ?>

<!-- MAIN CONTENT -->

<div class="col-lg-10 kc-main-content">

<div class="kc-page-title">

<h2>Admissions</h2>

<p>
All student admission records.
</p>

</div>

<div class="kc-table-box">

<table class="table kc-table">

<thead>

<tr>

<th>ID</th>

<th>Name</th>

<th>Parent Name</th>

<th>Mobile</th>

<th>Standard</th>

<th>School</th>

<th>Address</th>

<th>Status</th>

<th>Created At</th>
<th>Action</th>

</tr>

</thead>

<tbody>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['pname']; ?></td>

<td><?php echo $row['mobile']; ?></td>

<td><?php echo $row['std']; ?></td>

<td><?php echo $row['school']; ?></td>

<td><?php echo $row['address']; ?></td>

<td><?php echo $row['status']; ?></td>

<td><?php echo $row['createdat']; ?></td>
<td>
<a href="edit_admission.php?id=<?php echo $row['id']; ?>" class="edit-btn">
<i class="fa-solid fa-pen-to-square"></i>
</a>
<a href="admissions.php?id=<?php echo $row['id']; ?>" class="delete-btn">
<i class="fa-solid fa-trash"></i>
</a>
</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

</div>

</section>

</div>

</div>

</div>

</section>
</body>
</html>

<?php
include 'db.php';
if(isset($_GET['id'])) {
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM admissions WHERE id='$id'");
}
?>