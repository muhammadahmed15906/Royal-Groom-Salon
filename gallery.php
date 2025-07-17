<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Gallery | Royal Groom</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/styles.css" />
</head>
<body>

<div id="navbar-container">
    <?php include 'navbar.php'; ?>
  </div>

  <section class="gallery-hero">
    <div class="container">
      <h1>OUR GALLERY</h1>
    </div>
  </section>

  <section class="gallery-cards">
    <div class="container gallery-grid">
  
      <div class="gallery-card">
        <img src="assets/images/gallery-1.jpg" alt="Classic Haircut" />
        <div class="card-content">
          <h3>Classic Haircut</h3>
          <p>Sharp and clean classic haircut style for all occasions.</p>
        </div>
      </div>
  
      <div class="gallery-card">
        <img src="assets/images/gallery-2.jpg" alt="Beard Grooming" />
        <div class="card-content">
          <h3>Beard Grooming</h3>
          <p>Expert shaping and trimming to give your beard a perfect look.</p>
        </div>
      </div>
  
      <div class="gallery-card">
        <img src="assets/images/gallery-3.jpg" alt="Modern Styling" />
        <div class="card-content">
          <h3>Modern Styling</h3>
          <p>Trendy styles to keep you looking fresh and fashionable.</p>
        </div>
      </div>
  
      <div class="gallery-card">
        <img src="assets/images/gallery-4.jpg" alt="Shaving Services" />
        <div class="card-content">
          <h3>Shaving</h3>
          <p>Smooth and relaxing shaving experience with expert precision.</p>
        </div>
      </div>
  
      <div class="gallery-card">
        <img src="assets/images/gallery-5.jpg" alt="Facials" />
        <div class="card-content">
          <h3>Facials</h3>
          <p>Rejuvenate your skin with our signature facial treatments.</p>
        </div>
      </div>
  
      <div class="gallery-card">
        <img src="assets/images/gallery-6.jpg" alt="Hair Treatment" />
        <div class="card-content">
          <h3>Hair Treatment</h3>
          <p>Deep conditioning and hair care for healthy, shiny hair.</p>
        </div>
      </div>
  
      <div class="gallery-card">
        <img src="assets/images/gallery-7.jpg" alt="Kids Haircuts" />
        <div class="card-content">
          <h3>Kids Haircuts</h3>
          <p>Friendly and stylish haircuts for kids in a safe environment.</p>
        </div>
      </div>
  
      <div class="gallery-card">
        <img src="assets/images/gallery-8.jpg" alt="Hot Towel Service" />
        <div class="card-content">
          <h3>Hot Towel</h3>
          <p>Relaxing hot towel treatment to soothe and refresh.</p>
        </div>
      </div>
  
      <div class="gallery-card">
        <img src="assets/images/gallery-9.jpg" alt="Hair Styling Products" />
        <div class="card-content">
          <h3>Styling Products</h3>
          <p>Premium hair products to keep your style perfect all day.</p>
        </div>
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

<!-- Footer Section -->
<?php include 'footer.php'; ?>


  <!-- JS Script -->
  <script src="js/script.js"></script>

</body>
</html>