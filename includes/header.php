<!DOCTYPE html>
<html>
<head>
    <title>Online Book Store</title>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
<header class="main-header">
<div class="container">
<div class="navbar">
<div class="logo">
<a href="index.php">
<img src="assets/image/logo.png" alt="Logo">
<div class="logo-text">
<h2>Kateshiya Classes</h2>
<p>Bright Future Starts Here</p>
</div>
</a>
</div>

<nav class="nav-menu" id="mobileMenu">
    <div class="close-menu" onclick="toggleMenu()">
        <i class="fa-solid fa-xmark"></i>
    </div>
        <a href="/website/KATESHIYA_CLASSES/index.php">Home</a>
        <a href="/website/KATESHIYA_CLASSES/about.php">About</a>
        <a href="/website/KATESHIYA_CLASSES/faculty.php">Faculty</a>
        <a href="/website/KATESHIYA_CLASSES/gallary.php">Gallery</a>
        <a href="/website/KATESHIYA_CLASSES/contact.php">Contact</a>
        <a href="/website/KATESHIYA_CLASSES/admission.php" class="mobile-btn">
        Admission Open
        </a>
</nav>

<!-- RIGHT SIDE -->

<div class="right-section">

<a href="/website/KATESHIYA_CLASSES/admission_form.php" class="admission-btn">
Admission Open
</a>
    <div class="menu-toggle" onclick="toggleMenu()">
        <i class="fa-solid fa-bars"></i>
    </div>
</div>
</div>
</div>
</header>

<script>
function toggleMenu(){
document.getElementById("mobileMenu").classList.toggle("active");
}
</script>