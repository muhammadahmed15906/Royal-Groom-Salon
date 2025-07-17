<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Royal Groom | Luxury Men's Salon</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/styles.css" />
</head>
<body>

<div id="navbar-container">
    <?php include 'navbar.php'; ?>
  </div>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h2>PREMIUM GROOMING FOR DISCERNING MEN</h2>
      <p>Experience barbering at its finest with our luxury services</p>
      <a href="book.php" class="btn-book">BOOK NOW</a>
    </div>
  </section>

  <!-- Services Section -->
  <section class="services">
    <div class="container">
      <h2 class="section-title">OUR SIGNATURE SERVICES</h2>
      <div class="services-grid">
        <div class="service-card">
          <div class="service-icon"><i class="fa-solid fa-scissors"></i></div>
          <h3>Haircuts</h3>
          <p>Precision cuts using the latest styles & techniques.</p>
        </div>
        <div class="service-card">
          <div class="service-icon"><i class="fa-solid fa-user-tie"></i></div>
          <h3>Beard Grooming</h3>
          <p>Expert shaping, trimming and conditioning for your beard.</p>
        </div>
        <div class="service-card">
          <div class="service-icon"><i class="fa-solid fa-face-smile-beam"></i></div>
          <h3>Facials</h3>
          <p>Rejuvenating treatments designed for men’s skin.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section class="gallery">
    <div class="container">
      <h2 class="section-title">OUR WORK</h2>
      <div class="swiper myGallery">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="assets/images/our-work-img-1.jpg" alt="Haircut" /></div>
          <div class="swiper-slide"><img src="assets/images/our-work-img-2.jpg" alt="Beard Grooming" /></div>
          <div class="swiper-slide"><img src="assets/images/our-work-img-3.jpg" alt="Styling" /></div>
          <div class="swiper-slide"><img src="assets/images/our-work-img-4.jpg" alt="Shaving" /></div>
          <div class="swiper-slide"><img src="assets/images/our-work-img-5.jpg" alt="Facial" /></div>
          <div class="swiper-slide"><img src="assets/images/our-work-img-6.jpg" alt="Products" /></div>
        </div>

        <!-- Swiper Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta">
    <div class="container">
      <h2>READY FOR YOUR TRANSFORMATION</h2>
      <p>Book your appointment with our master barbers</p>
      <a href="book.php" class="btn-book">BOOK NOW</a>
    </div>
  </section>

  <?php include 'footer.php'; ?>


  <!-- Swiper JS CDN -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Custom JS -->
  <script src="js/script.js"></script>

</body>
</html>


