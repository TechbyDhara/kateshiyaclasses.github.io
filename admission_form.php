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
<section class="admission-section">
<div class="container">
<div class="admission-form-box">
<div class="form-title">
<h2>Student Admission Form</h2>
<p>
Fill in the details below for admission at Kateshiya Classes.
</p>
</div>
<form  method="POST">
    <div class="form-group">
        <label>Student Name</label>
        <input type="text"
        name="student_name"
        placeholder="Enter student name"
        required>
    </div>
    <div class="form-group">
        <label>Parent Name</label>
        <input type="text"
        name="parent_name"
        placeholder="Enter parent name"
        required>
    </div>
    <div class="form-group">
        <label>Mobile Number</label>
        <input type="tel"
        name="mobile"
        placeholder="Enter mobile number"
        required>
    </div>
<div class="form-group">
<label>Select Standard</label>
    <select name="standard" required>
        <option value="">Choose Standard</option>
        <option value="Std 1">Std 1</option>
        <option value="Std 2">Std 2</option>
        <option value="Std 3">Std 3</option>
        <option value="Std 4">Std 4</option>
        <option value="Std 5">Std 5</option>
        <option value="Std 6">Std 6</option>
        <option value="Std 7">Std 7</option>
        <option value="Std 8">Std 8</option>
        <option value="Std 9">Std 9</option>
        <option value="Std 10">Std 10</option>
        <option value="Std 11">Std 11</option>
        <option value="Std 12">Std 12</option>
    </select>

</div>

<div class="form-group">
<label>School Name</label>
<input type="text"
name="school"
placeholder="Enter school name">
</div>
<div class="form-group">
<label>Home Address</label>
<textarea name="address"
rows="4"
placeholder="Enter address"></textarea>
</div>
<button type="submit" name="submit" class="submit-btn">
Submit Admission
</button>
</form>
</div>
</div>
<!-- admission_insert.php -->
<?php

include 'config/db.php';
// print_r($_POST);
if(isset($_POST['submit'])){

$sname = $_POST['student_name'];
$pname = $_POST['parent_name'];
$mobile = $_POST['mobile'];
$standard = $_POST['standard'];
$school = $_POST['school'];
$address = $_POST['address'];



$sql = "INSERT INTO admissions
(name,pname,mobile,std,school,address)
VALUES
('$sname','$pname','$mobile','$standard','$school','$address')";

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
<?php include 'includes/footer.php'; ?>
</body>
</html>