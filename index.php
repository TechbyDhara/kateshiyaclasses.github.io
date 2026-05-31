<!DOCTYPE html>
<html>
<head>
    <title>Online Book Store</title>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
<section class="hero-slider">

    <div id="bookCarousel"
         class="carousel slide"
         data-bs-ride="carousel">

        <div class="carousel-indicators">

            <button type="button"
                    data-bs-target="#bookCarousel"
                    data-bs-slide-to="0"
                    class="active">
            </button>

            <button type="button"
                    data-bs-target="#bookCarousel"
                    data-bs-slide-to="1">
            </button>

            <button type="button"
                    data-bs-target="#bookCarousel"
                    data-bs-slide-to="2">
            </button>

            <button type="button"
                    data-bs-target="#bookCarousel"
                    data-bs-slide-to="3">
            </button>

            <button type="button"
                    data-bs-target="#bookCarousel"
                    data-bs-slide-to="4">
            </button>
        </div>
 <!-- ----------------------------------slides------------------------------ -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/image/t2.png"
                     class="d-block w-100"
                     alt="Banner">
            </div>
            <div class="carousel-item">
                <img src="assets/image/navratri.png" class="d-block w-100" alt="Banner">
            </div>
            <div class="carousel-item">
                <img src="assets/image/kcbanner3.png" class="d-block w-100"  alt="Banner">
            </div>

            <div class="carousel-item">
                <img src="assets/image/t6.png" class="d-block w-100"  alt="Banner">
            </div>
            <div class="carousel-item">
                <img src="assets/image/kcbanner2.png" class="d-block w-100"  alt="Banner">
            </div>
        </div>

        <button class="carousel-control-prev"
                type="button"
                data-bs-target="#bookCarousel"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next"
                type="button"
                data-bs-target="#bookCarousel"
                data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>

<!-- <------------welcome section---------------->
<section class="welcome-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="welcome-content">
                    <h5>Welcome To</h5>
                    <h2>Kateshiya Classes</h2>
                    <p>
                    At Kateshiya Classes, we believe every student can achieve success with the right guidance. Our classes for Std. 1 to 12 are designed to create a strong learning foundation through easy teaching methods, regular tests and supportive mentorship.
                    We provide a positive learning environment, experienced teachers and personal guidance for every student.
                    <div class="welcome-btns">
                        <a href="about.php" class="about-btn">
                            Explore More
                        </a>
                        <a href="contact.php" class="contact-btn">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
            <!-- right photo -->
            <div class="col-lg-6">
                <div class="welcome-image">
                <img src="assets/image/dharam.png" alt="Classroom">
                </div>  
            </div>
        </div>
    </div>
</section>
<section class="kc-result-gallery">

<div class="container">
<div class="kc-gallery-title">
<h5>Our Results</h5>
<h2>Kateshiya Classes Toppers</h2>
</div>
<div class="row g-4">
<!-- 2026 -->
<div class="col-lg-4 col-md-6">
<a href="assets/image/kctbanner3.jpg"
class="kc-result-banner">
<img src="assets/image/kctbanner3.jpg"
alt="2025 Result Banner">
<div class="kc-banner-overlay">
<h3>Year 2025-2026</h3>
</div>
</a>
</div>

<!-- 2025 -->
<div class="col-lg-4 col-md-6">

<a href="assets/image/kctbanner2.jpg"
class="kc-result-banner">

<img src="assets/image/kctbanner2.jpg"
alt="2024 Result Banner">
<div class="kc-banner-overlay">
<h3>Year 2024-2025</h3>
</div>
</a>
</div>
<!-- 2024 -->

<div class="col-lg-4 col-md-6">
<a href="assets/image/kctbanner1.jpg"
class="kc-result-banner">
<img src="assets/image/kctbanner1.jpg"
alt="2023 Result Banner">
<div class="kc-banner-overlay">
<h3>Year 2023-2024</h3>
</div>

</a>
</div>
</div>
</div>
</section>

<section class="trust-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="trust-content">
                <span class="trust-subtitle">
                Why Choose Kateshiya Classes
                </span>
                <h2>
                        Trusted Coaching For Better Student Success
                </h2>
                <p>
                    Kateshiya Classes focuses on quality teaching, regular practice, personal guidance and student improvement with modern learning methods.
                </p>
                <div class="trust-points">
                <div class="trust-item">
                    <div class="trust-check">
                    <i class="fa-solid fa-check"></i>
                    </div>
                <div>
                <h4>Experienced Teachers</h4>
                <p>Simple teaching methods with deep subject knowledge.</p>
                </div>
                </div>
                <div class="trust-item">
                    <div class="trust-check">
                    <i class="fa-solid fa-check"></i>
                    </div>
                <div>
                <h4>Regular Test System</h4>
                <p>Weekly exams and performance tracking for students.</p>
                </div>
                </div>
                <div class="trust-item">
                    <div class="trust-check">
                    <i class="fa-solid fa-check"></i>
                    </div>
                <div>
                <h4>Personal Attention</h4>
                <p>Special focus on every student’s progress and doubts.</p>
                </div>
                </div>
            </div>
        </div>
    </div>
<!-- ---------right side--------- -->
    <div class="col-lg-7">
        <div class="trust-wrapper">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="trust-card">
                    <div class="trust-icon">
                    <i class="fa-solid fa-user-graduate"></i>
                    </div>
                <h3>Expert Teachers</h3>
                <p>
                Highly experienced teachers for strong academic learning.
                </p>
                </div>
            </div>
        <div class="col-md-6">
            <div class="trust-card active-card">
                <div class="trust-icon">
                <i class="fa-solid fa-book-open-reader"></i>
                </div>
            <h3>Smart Learning</h3>
            <p>
            Modern teaching methods with practical understanding.
            </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="trust-card">
                <div class="trust-icon">
                <i class="fa-solid fa-chart-line"></i>
                </div>
                <h3>Best Results</h3>
                <p>
                Students achieve excellent performance every year.
                </p>
                </div>
            </div>
        <div class="col-md-6">
        <div class="trust-card">
        <div class="trust-icon">
        <i class="fa-solid fa-users"></i>
        </div>
        <h3>Small Batches</h3>
        <p>
        Limited students for better interaction and attention.
        </p>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
</section>

<!-- ---------gallary------------- -->
 <section class="gallery-section">
<div class="container">
<div class="section-title">
<h5>Our Gallery</h5>
<h2>Kateshiya Classes Gallery</h2>
<p>
Moments of learning, success, classroom activities and student achievements.
</p>
</div>
<div class="row g-4">
<div class="col-lg-4 col-md-6 col-6">
<div class="gallery-box">
<img src="assets/image/img1.jpg" alt="Gallery">
</div>
</div>
<div class="col-lg-4 col-md-6 col-6">
<div class="gallery-box">
<img src="assets/image/t6.png" alt="Gallery">
</div>
</div>
<div class="col-lg-4 col-md-6 col-6">
<div class="gallery-box">
<img src="assets/image/t4.jpg" alt="Gallery">
</div>
</div>
<div class="col-lg-4 col-md-6 col-6">
<div class="gallery-box">
<img src="assets/image/t2.png" alt="Gallery">
</div>
</div>
<div class="col-lg-4 col-md-6 col-6">
<div class="gallery-box">
<img src="assets/image/navratri.png" alt="Gallery">
</div>
</div>
<div class="col-lg-4 col-md-6 col-6">
<div class="gallery-box">
<img src="assets/image/t7.jpeg" alt="Gallery">
</div>
</div>
</div>
</div>
</section>
<!---------banner-------->
 <section class="hero-banner">
</section>
<section class="admission-section">
<div class="container">
<div class="admission-form-box">
<div class="form-title">
<h2>Student Admission Form</h2>
<p>
Fill in the details below for admission at Kateshiya Classes.
</p>
</div>
<form  action="admission_form.php" method="POST">
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
</section>
<?php include 'includes/footer.php'; ?>
</body>
</html>
