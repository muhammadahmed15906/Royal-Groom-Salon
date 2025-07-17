<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo "<script>alert('Please login first to book an appointment!'); window.location.href='form.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Book Appointment</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    :root {
      --gold: #f29756;
      --dark: #121212;
      --darker: #1a1a1a;
      --light: #f8f8f8;
      --text: #e0e0e0;
    }

    body, html {
      height: 100%;
      margin: 0;
      font-family: 'Georgia', serif;
      background: var(--dark);
      color: var(--text);
    }

    .appointment-wrapper {
      max-width: 600px;
      margin: 60px auto;
      padding: 30px;
      background: var(--darker);
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
    }

    h2.section-title {
      text-align: center;
      font-size: 2rem;
      color: var(--gold);
      margin-bottom: 20px;
      position: relative;
    }

    h2.section-title::after {
      content: '';
      width: 60px;
      height: 3px;
      background: var(--gold);
      display: block;
      margin: 10px auto 0;
      border-radius: 2px;
    }

    label {
      font-weight: 600;
      color: var(--light);
      font-size: 0.9rem;
    }

    .form-control, .form-select {
      border-radius: 8px;
      background: var(--dark);
      border: 1px solid var(--gold);
      color: var(--text);
      font-size: 0.9rem;
      padding: 8px 12px;
    }

    .form-control:focus, .form-select:focus {
      border-color: var(--gold);
      box-shadow: 0 0 0 0.15rem rgba(242, 151, 86, 0.25);
      background: var(--dark);
      color: var(--text);
    }

    .form-control::placeholder {
      color: #bbb;
    }

    .btn-primary {
      background-color: var(--gold);
      border: none;
      padding: 10px;
      font-weight: bold;
      border-radius: 50px;
      color: var(--dark);
      transition: background-color 0.3s ease, transform 0.2s ease;
      font-size: 1rem;
    }

    .btn-primary:hover {
      background-color: #ffa467;
      transform: translateY(-2px);
    }

    @media (max-width: 768px) {
      .appointment-wrapper {
        margin: 30px 15px;
        padding: 25px 20px;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="appointment-wrapper">
      <h2 class="section-title">Book Appointment</h2>
      <form action="insert.php" method="POST">
        <div class="mb-2">
          <label for="name" class="form-label">Full Name *</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Your full name" required />
        </div>
        <div class="mb-2">
          <label for="email" class="form-label">Email *</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="example@mail.com" required />
        </div>
        <div class="mb-2">
          <label for="phone" class="form-label">Phone Number *</label>
          <input type="tel" class="form-control" id="phone" name="phone" placeholder="+1234567890" required />
        </div>
        <div class="mb-2">
          <label for="service" class="form-label">Select Service *</label>
          <select class="form-select" id="service" name="service" required>
            <option value="">-- Choose a Service --</option>
            <option>Hair Styling</option>
            <option>Hair Coloring</option>
            <option>Facial Treatment</option>
            <option>Pro Makeup</option>
            <option>Manicure & Pedicure</option>
            <option>Classic Haircut</option>
            
          </select>
        </div>
        <div class="mb-2">
          <label for="date" class="form-label">Preferred Date *</label>
          <input type="date" class="form-control" id="date" name="date" required />
        </div>
        <div class="mb-2">
          <label for="time" class="form-label">Preferred Time *</label>
          <input type="time" class="form-control" id="time" name="time" required />
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message (optional)</label>
          <textarea class="form-control" id="message" name="message" rows="3" placeholder="Any specific instructions?"></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Book Appointment</button>
      </form>
    </div>
  </div>

</body>
</html>