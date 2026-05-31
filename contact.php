<!DOCTYPE html>
<html>
<head>
    <title>Online Book Store</title>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/Website/Kateshiya_classes/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<?php include 'includes/header.php'; ?>

<section class="contact-section">

<div class="container">

<div class="contact-box">

<div class="row g-0 align-items-center">

<!-- LEFT IMAGE -->

<div class="col-lg-6">

<div class="contact-image">

<img src="assets/image/contact2.png" alt="Contact">

<div class="contact-overlay">

<h2>
Need Guidance For Admission?
</h2>

<p>
Visit Kateshiya Classes for better learning and student success.
</p>

</div>

</div>

</div>

<!-- RIGHT CONTENT -->

<div class="col-lg-6">

<div class="contact-content">

<span class="contact-subtitle">
Contact Kateshiya Classes
</span>

<h2>
Contact With Us
</h2>

<p class="contact-text">
For admission inquiries, batch details and course guidance, contact our team or visit our classes.
</p>

<div class="contact-info">

<div class="info-box">

<div class="info-icon">
<i class="fa-solid fa-location-dot"></i>
</div>

<div>
<h4>Address</h4>
<p>
Opposite Gaushala, Near Mahadev mandir, Navanagna, Jamnagar
</p>
</div>

</div>

<div class="info-box">

<div class="info-icon">
<i class="fa-solid fa-phone"></i>
</div>

<div>
<h4>Phone Number</h4>
<p>
+91 95103 59173
</p>
</div>

</div>

<div class="info-box">

<div class="info-icon">
<i class="fa-solid fa-envelope"></i>
</div>

<div>
<h4>Email Address</h4>
<p>
kateshiyaclasses@gmail.com
</p>
</div>

</div>

<div class="info-box">

<div class="info-icon">
<i class="fa-solid fa-clock"></i>
</div>

<div>
<h4>Class Timing</h4>
<p>
Monday - Saturday : 8 AM - 7 PM
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="kc-section ">

<div class="container">

<div class="kc-box">

<div class="row g-0 align-items-center">



<!-- RIGHT SIDE FORM -->
<div class="col-lg-7">
<div class="kc-form">
<div class="kc-form-title">
<h2>Contact Us</h2>
<p>
Fill the form below for contact to Kateshiya Classes.
</p>
</div>
<form method="POST">
<div class="kc-form-group">
<label>Your Name</label>
<input type="text"
name="name"
placeholder="Enter your name"
required>
</div>
<div class="kc-form-group">
<label>Mobile Number</label>
<input type="tel"
name="mobile"
placeholder="Enter mobile number"
required>
</div>
<div class="kc-form-group">
<label>Message</label>
<textarea name="message"
rows="4"
placeholder="Enter your message"></textarea>
</div>
<button type="submit"
name="submit"
class="kc-submit-btn">
Submit 
</button>
</form>
</div>
</div>
<!-- LEFT SIDE IMAGE -->

<div class="col-lg-5">

<div class="kc-image">

<img src="assets/image/kccontact.png"
alt="Admission Image">

</div>

</div>
</div>
</div>
</div>



<?php
include 'config/db.php';
// print_r($_POST);
if(isset($_POST['submit'])){

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];


$sql = "INSERT INTO contactus
(name,mobile,message)
VALUES
('$name','$mobile','$message')";

$query = mysqli_query($conn,$sql);
if($query){

$success = "Submitted Successfully";

}
if($success != ""){ 
}

?>
<div class="success-message">

<?php echo $success; ?>

</div>

<?php } ?>


</section>
<!---------banner-------->
<?php include 'includes/footer.php'; ?>
</body>
</html>