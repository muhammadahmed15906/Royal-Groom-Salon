<?php session_start(); ?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us - Royal Groom</title>
  <style>
    :root {
      --gold: #f29756;
      --dark: #121212;
      --darker: #1a1a1a;
      --text: #e0e0e0;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, var(--dark), var(--darker));
      color: var(--text);
      line-height: 1.6;
      min-height: 100vh;
    }

    .main-content {
      max-width: 1200px;
      margin: 0 auto;
      padding: 4rem 2rem;
    }

    .page-title {
      text-align: center;
      margin-bottom: 3rem;
    }

    .page-title h1 {
      font-size: 3rem;
      color: var(--gold);
      margin-bottom: 1rem;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .page-title p {
      font-size: 1.2rem;
      color: var(--text);
      opacity: 0.9;
    }

    .contact-container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 4rem;
      margin-top: 3rem;
    }

    .contact-info,
    .contact-form {
      background: rgba(26, 26, 26, 0.8);
      padding: 2.5rem;
      border-radius: 15px;
      border: 1px solid rgba(242, 151, 86, 0.3);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .contact-info h2,
    .contact-form h2 {
      color: var(--gold);
      font-size: 1.8rem;
      margin-bottom: 1.5rem;
      border-bottom: 2px solid var(--gold);
      padding-bottom: 0.5rem;
    }

    .info-item {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1.5rem;
      padding: 1rem;
      background: rgba(18, 18, 18, 0.5);
      border-radius: 10px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .info-item:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(242, 151, 86, 0.2);
    }

    .info-icon {
      background: var(--gold);
      color: var(--dark);
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      font-weight: bold;
    }

    .info-text h3 {
      color: var(--gold);
      font-size: 1.1rem;
      margin-bottom: 0.3rem;
    }

    .info-text p {
      color: var(--text);
      font-size: 0.95rem;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-group label {
      display: block;
      color: var(--text);
      margin-bottom: 0.5rem;
      font-weight: 500;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
      width: 100%;
      padding: 1rem;
      border: 2px solid rgba(242, 151, 86, 0.3);
      border-radius: 8px;
      background: rgba(18, 18, 18, 0.8);
      color: var(--text);
      font-size: 1rem;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-group textarea {
      resize: vertical;
      min-height: 120px;
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1rem;
    }

    .submit-btn {
      background: linear-gradient(135deg, var(--gold), #e08540);
      color: var(--dark);
      padding: 1rem 2rem;
      border: none;
      border-radius: 8px;
      font-size: 1.1rem;
      font-weight: bold;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      width: 100%;
    }

    .submit-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(242, 151, 86, 0.4);
    }

    .google-map {
      margin-top: 3rem;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    @media (max-width: 768px) {

      .contact-container {
        grid-template-columns: 1fr;
        gap: 2rem;
      }

      .form-row {
        grid-template-columns: 1fr;
      }

      .page-title h1 {
        font-size: 2.5rem;
      }

      .main-content {
        padding: 2rem 1rem;
      }
    }

    #navbar-container {
  margin-bottom: 100px;
}
  </style>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/styles.css" />

</head>
<body>

<div id="navbar-container">
    <?php include 'navbar.php'; ?>
  </div>

  <main class="main-content">
    <div class="page-title">
      <h1>Contact Us</h1>
      <p>Get in touch with Royal Groom - Your premier salon management solution</p>
    </div>

    <div class="contact-container">
      <div class="contact-info">
        <h2>Get In Touch</h2>
        <div class="info-item">
          <div class="info-icon">📍</div>
          <div class="info-text">
            <h3>Address</h3>
            <p>123 Business District<br>Karachi, Sindh 75000<br>Pakistan</p>
          </div>
        </div>
        <div class="info-item">
          <div class="info-icon">📞</div>
          <div class="info-text">
            <h3>Phone</h3>
            <p>+92 300 1234567<br>+92 21 1234567</p>
          </div>
        </div>
        <div class="info-item">
          <div class="info-icon">✉</div>
          <div class="info-text">
            <h3>Email</h3>
            <p>info@royalgroom.com<br>support@royalgroom.com</p>
          </div>
        </div>
        <div class="info-item">
          <div class="info-icon">🌐</div>
          <div class="info-text">
            <h3>Website</h3>
            <p>www.royalgroom.com</p>
          </div>
        </div>
      </div>

      <div class="contact-form">
        <h2>Send us a Message</h2>
        <form action="send_contact.php" method="POST">
          <div class="form-row">
            <div class="form-group">
              <label for="firstName">First Name *</label>
              <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
              <label for="lastName">Last Name *</label>
              <input type="text" id="lastName" name="lastName" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="email">Email *</label>
              <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" id="phone" name="phone">
            </div>
          </div>
          <div class="form-group">
            <label for="subject">Subject *</label>
            <select id="subject" name="subject" required>
              <option value="">Select a subject</option>
              <option value="general">General Inquiry</option>
              <option value="demo">Request Demo</option>
              <option value="pricing">Pricing Information</option>
              <option value="support">Technical Support</option>
              <option value="partnership">Partnership</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message">Message *</label>
            <textarea id="message" name="message" placeholder="Tell us about your salon management needs..." required></textarea>
          </div>
          <button type="submit" class="submit-btn">Send Message</button>
        </form>
      </div>
    </div>

    <!-- Google Map Section -->
    <div class="google-map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d903.887219017331!2d67.12620386961731!3d25.015440613915377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb347f6c8a122f5%3A0xdb84d3a04e35cb9c!2sAptech%20Gulshan%20e%20Maymar%20Center!5e0!3m2!1sen!2s!4v1751454277758!5m2!1sen!2s"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </main>

<!-- Footer Section -->
<?php include 'footer.php'; ?>


<!-- Custom JS -->
<script src="js/script.js"></script>
</body>
</html>