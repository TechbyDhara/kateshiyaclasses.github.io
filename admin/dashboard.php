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
$admission_query = mysqli_query($conn,"SELECT * FROM admissions");
$total_admissions = mysqli_num_rows($admission_query);

$contact_query = mysqli_query($conn,"SELECT * FROM contactus");
$total_contacts = mysqli_num_rows($contact_query);

?>
<section class="kc-dashboard">
<div class="container-fluid">
<div class="row">
<?php include 'sidebar.php'; ?>

<div class="col-lg-10 kc-main-content">

<div class="kc-top-title">

<h2>Dashboard</h2>

<p>
Welcome to Kateshiya Classes Admin Panel
</p>

</div>

<div class="row g-4">

<!-- TOTAL ADMISSIONS -->

<div class="col-lg-4 col-md-6">

<div class="kc-dashboard-card">

<div class="kc-card-icon">

<i class="fa-solid fa-user-graduate"></i>

</div>

<h3><?php echo $total_admissions; ?></h3>

<p>Total Admissions</p>

</div>

</div>

<!-- TOTAL CONTACT -->

<div class="col-lg-4 col-md-6">

<div class="kc-dashboard-card">

<div class="kc-card-icon">

<i class="fa-solid fa-envelope"></i>

</div>

<h3><?php echo $total_contacts; ?></h3>

<p> Total Contact Messages</p>

</div>

</div>

</div>

</div>

</div>

</div>

</section>
</body>
</html>