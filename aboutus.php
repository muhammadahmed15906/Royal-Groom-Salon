<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Royal Groom - About Us</title>
    <style>
      :root {
        --gold: #f29756;
        --dark: #121212;
        --darker: #1a1a1a;
        --light: #f8f8f8;
        --text: #e0e0e0;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: 'Arial', sans-serif;
        background: linear-gradient(135deg, var(--dark) 0%, var(--darker) 100%);
        color: var(--text);
        line-height: 1.6;
      }

      .about-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 20px;
      }

      .hero-section {
        text-align: center;
        margin-bottom: 80px;
        position: relative;
      }

      .hero-section::before {
        content: '';
        position: absolute;
        top: -20px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: linear-gradient(90deg, var(--gold), #d4af37);
        border-radius: 2px;
      }

      .salon-name {
        font-size: 3.5rem;
        font-weight: bold;
        background: linear-gradient(45deg, var(--gold), #d4af37);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 3px;
        animation: glow 2s ease-in-out infinite alternate;
      }

      @keyframes glow {
        from { filter: drop-shadow(0 0 10px rgba(242, 151, 86, 0.3)); }
        to { filter: drop-shadow(0 0 20px rgba(242, 151, 86, 0.6)); }
      }

      .tagline {
        font-size: 1.3rem;
        opacity: 0.9;
        max-width: 600px;
        margin: 0 auto;
        font-style: italic;
      }

      .content-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        margin-bottom: 60px;
        align-items: center;
      }

      .story-section {
        background: rgba(26, 26, 26, 0.8);
        padding: 40px;
        border-radius: 15px;
        border: 1px solid rgba(242, 151, 86, 0.2);
        backdrop-filter: blur(10px);
        position: relative;
      }

      .story-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, var(--gold), #d4af37);
      }

      .section-title {
        font-size: 2.2rem;
        color: var(--gold);
        margin-bottom: 25px;
        position: relative;
      }

      .section-text {
        font-size: 1.1rem;
        line-height: 1.8;
        opacity: 0.9;
      }

      .values-section {
        display: flex;
        flex-direction: column;
        gap: 20px;
      }

      .value-item {
        background: rgba(18, 18, 18, 0.9);
        padding: 25px;
        border-radius: 10px;
        border-left: 4px solid var(--gold);
        transition: all 0.3s ease;
        cursor: pointer;
      }

      .value-item:hover {
        transform: translateX(10px);
        background: rgba(242, 151, 86, 0.1);
        box-shadow: 0 10px 30px rgba(242, 151, 86, 0.2);
      }

      .value-title {
        font-size: 1.3rem;
        color: var(--gold);
        margin-bottom: 10px;
        font-weight: bold;
      }

      .value-desc {
        opacity: 0.8;
      }

      .stats-section {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        margin: 60px 0;
        text-align: center;
      }

      .stat-item {
        background: rgba(26, 26, 26, 0.8);
        padding: 30px 20px;
        border-radius: 15px;
        border: 1px solid rgba(242, 151, 86, 0.2);
        transition: all 0.3s ease;
      }

      .stat-item:hover {
        transform: translateY(-10px);
        border-color: var(--gold);
        box-shadow: 0 15px 40px rgba(242, 151, 86, 0.3);
      }

      .stat-number {
        font-size: 2.5rem;
        font-weight: bold;
        color: var(--gold);
        margin-bottom: 10px;
      }

      .stat-label {
        opacity: 0.8;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.9rem;
      }

      .reviews-section {
        margin: 60px 0;
        text-align: center;
      }

      .reviews-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin-top: 30px;
      }

      .review-item {
        background: rgba(26, 26, 26, 0.8);
        padding: 25px;
        border-radius: 15px;
        border: 1px solid rgba(242, 151, 86, 0.2);
        transition: all 0.3s ease;
      }

      .review-item:hover {
        transform: scale(1.02);
        border-color: var(--gold);
        box-shadow: 0 10px 30px rgba(242, 151, 86, 0.2);
      }

      .review-text {
        font-size: 1rem;
        opacity: 0.9;
        margin-bottom: 15px;
        font-style: italic;
      }

      .review-author {
        font-size: 0.9rem;
        color: var(--gold);
        font-weight: bold;
      }

      .cta-section {
        text-align: center;
        background: linear-gradient(135deg, rgba(242, 151, 86, 0.1), rgba(212, 175, 55, 0.1));
        padding: 50px;
        border-radius: 20px;
        border: 1px solid rgba(242, 151, 86, 0.3);
        position: relative;
        overflow: hidden;
      }

      .cta-section::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(242, 151, 86, 0.1) 0%, transparent 70%);
        animation: rotate 10s linear infinite;
      }

      @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
      }

      .cta-content {
        position: relative;
        z-index: 1;
      }

      .cta-title {
        font-size: 2rem;
        color: var(--gold);
        margin-bottom: 20px;
      }

      .cta-text {
        font-size: 1.2rem;
        margin-bottom: 30px;
        opacity: 0.9;
      }

      .cta-button {
        display: inline-block;
        background: linear-gradient(45deg, var(--gold), #d4af37);
        color: var(--dark);
        padding: 15px 40px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
      }

      .cta-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(242, 151, 86, 0.4);
        background: linear-gradient(45deg, #d4af37, var(--gold));
      }

      @media (max-width: 768px) {
        .salon-name { font-size: 2.5rem; }
        .content-grid { grid-template-columns: 1fr; gap: 40px; }
        .stats-section { grid-template-columns: repeat(2, 1fr); gap: 20px; }
        .story-section, .cta-section { padding: 30px 20px; }
      }

      @media (max-width: 480px) {
        .salon-name { font-size: 2rem; }
        .stats-section { grid-template-columns: 1fr; }
      }

      #navbar-container {
        margin-bottom: 150px;
      }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
  <div id="navbar-container">
    <?php include 'navbar.php'; ?>
  </div>

<div class="about-container">

  <div class="hero-section">
    <h1 class="salon-name">Royal Groom</h1>
    <p class="tagline">Redefining Luxury Grooming for the Modern Gentleman</p>
  </div>

  <div class="content-grid">
    <div class="story-section">
      <h2 class="section-title">Our Story</h2>
      <p class="section-text">
        Royal Groom was founded with a passion to redefine men’s grooming. What started as a simple vision quickly evolved into a luxury experience tailored for the modern gentleman.
      </p>
      <br />
      <p class="section-text">
        From our carefully designed interiors to our highly trained grooming experts, every detail at Royal Groom is crafted with elegance and precision. We believe grooming isn't just a routine — it's an experience of confidence, style, and sophistication.
      </p>
    </div>

    <div class="values-section">
      <div class="value-item">
        <div class="value-title">Excellence</div>
        <div class="value-desc">We pursue perfection in every cut, every shave, and every service we provide.</div>
      </div>
      <div class="value-item">
        <div class="value-title">Craftsmanship</div>
        <div class="value-desc">Our skilled professionals are artists who transform grooming into an art form.</div>
      </div>
      <div class="value-item">
        <div class="value-title">Luxury</div>
        <div class="value-desc">Experience premium comfort and sophistication in our meticulously designed space.</div>
      </div>
      <div class="value-item">
        <div class="value-title">Innovation</div>
        <div class="value-desc">We stay ahead with the latest techniques and premium products in men's grooming.</div>
      </div>
    </div>
  </div>

  <div class="stats-section">
    <div class="stat-item">
      <div class="stat-number">5000+</div>
      <div class="stat-label">Satisfied Clients</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">10+</div>
      <div class="stat-label">Years Experience</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">25+</div>
      <div class="stat-label">Premium Services</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">100%</div>
      <div class="stat-label">Satisfaction Rate</div>
    </div>
  </div>

  <div class="reviews-section">
    <h2 class="section-title">Client Reviews</h2>
    <div class="reviews-grid">
      <div class="review-item">
        <p class="review-text">"Absolutely fantastic experience! The attention to detail was incredible."</p>
        <p class="review-author">– Ahmed R.</p>
      </div>
      <div class="review-item">
        <p class="review-text">"Best grooming service I’ve ever had. True professionals!"</p>
        <p class="review-author">– Bilal K.</p>
      </div>
      <div class="review-item">
        <p class="review-text">"Stylish, clean, and top-notch service. Highly recommended!"</p>
        <p class="review-author">– Usman A.</p>
      </div>
    </div>
  </div>

  <div class="cta-section">
    <div class="cta-content">
      <h2 class="cta-title">Experience Royal Treatment</h2>
      <p class="cta-text">Ready to discover what makes Royal Groom the choice of discerning gentlemen? Book your appointment today and step into a world of unmatched grooming excellence.</p>
      <a href="book.php" class="cta-button">Book Your Appointment</a>
    </div>
  </div>

</div> <!-- end of about-container -->

<?php include 'footer.php'; ?>
<script src="js/script.js"></script>

</body>
</html>
