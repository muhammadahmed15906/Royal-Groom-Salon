<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("Location: form.php"); // Not logged in
  exit;
}
include 'db.php';

$user_email = $_SESSION['email'];

// Fetch appointments from DB
$approved = mysqli_query($con, "SELECT * FROM appointments WHERE email='$user_email'");
$pending = mysqli_query($con, "SELECT * FROM pending_requests WHERE email='$user_email'");
$rejected = mysqli_query($con, "SELECT * FROM rejected_appointments WHERE email='$user_email'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>My Appointments</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    :root {
      --gold: #f29756;
      --dark: #121212;
      --darker: #1a1a1a;
      --text: #e0e0e0;
      --success: #28a745;
      --warning: #ffc107;
      --danger: #dc3545;
    }
    body {
      font-family: 'Segoe UI', sans-serif;
      background: var(--dark);
      color: var(--text);
      margin: 0;
      padding: 40px 20px;
    }
    .appointments-wrapper {
      max-width: 1000px;
      margin: 0 auto;
    }
    h2 {
      text-align: center;
      color: var(--gold);
      margin-bottom: 30px;
      font-size: 2rem;
    }
    .appointment-section {
      margin-bottom: 40px;
    }
    .section-title {
      font-size: 1.3rem;
      color: var(--gold);
      border-bottom: 2px solid var(--gold);
      padding-bottom: 5px;
      margin-bottom: 15px;
    }
    .appointment-card {
      background: var(--darker);
      border: 1px solid rgba(255, 255, 255, 0.05);
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 15px;
      position: relative;
      transition: 0.3s;
    }
    .appointment-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(242, 151, 86, 0.1);
    }
    .appointment-info {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }
    .info-label {
      font-weight: bold;
      margin-right: 8px;
      color: var(--gold);
    }
    .status-badge {
      padding: 5px 12px;
      border-radius: 20px;
      font-size: 0.75rem;
      font-weight: bold;
      text-transform: uppercase;
      margin-left: 10px;
      white-space: nowrap;
    }
    .approved { background-color: var(--success); color: #fff; }
    .pending { background-color: var(--warning); color: #000; }
    .rejected { background-color: var(--danger); color: #fff; }
    .info-flex {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 8px;
      flex-wrap: wrap;
    }
    .back-home {
      text-align: center;
      margin-top: 40px;
    }
    .back-home a {
      display: inline-block;
      padding: 12px 25px;
      background-color: var(--gold);
      color: var(--dark);
      text-decoration: none;
      border-radius: 50px;
      font-weight: bold;
      font-size: 1rem;
      transition: background 0.3s ease;
    }
    .back-home a:hover {
      background-color: #ffa467;
    }
  </style>
</head>
<body>
  <div class="appointments-wrapper">
    <h2>My Appointments</h2>

    <!-- Approved -->
    <div class="appointment-section">
      <div class="section-title">Approved Appointments</div>
      <?php while ($row = mysqli_fetch_assoc($approved)) { ?>
        <div class="appointment-card">
          <div class="appointment-info">
            <div><span class="info-label">Service:</span> <?= htmlspecialchars($row['service']) ?></div>
            <div><span class="info-label">Date:</span> <?= $row['date'] ?></div>
            <div class="info-flex">
              <div><span class="info-label">Time:</span> <?= $row['time'] ?></div>
              <div class="status-badge approved">APPROVED</div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

    <!-- Pending -->
    <div class="appointment-section">
      <div class="section-title">Pending Appointments</div>
      <?php while ($row = mysqli_fetch_assoc($pending)) { ?>
        <div class="appointment-card">
          <div class="appointment-info">
            <div><span class="info-label">Service:</span> <?= htmlspecialchars($row['service']) ?></div>
            <div><span class="info-label">Date:</span> <?= $row['date'] ?></div>
            <div class="info-flex">
              <div><span class="info-label">Time:</span> <?= $row['time'] ?></div>
              <div class="status-badge pending">PENDING</div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

    <!-- Rejected -->
    <div class="appointment-section">
      <div class="section-title">Rejected Appointments</div>
      <?php while ($row = mysqli_fetch_assoc($rejected)) { ?>
        <div class="appointment-card">
          <div class="appointment-info">
            <div><span class="info-label">Service:</span> <?= htmlspecialchars($row['service']) ?></div>
            <div><span class="info-label">Date:</span> <?= $row['date'] ?></div>
            <div class="info-flex">
              <div><span class="info-label">Time:</span> <?= $row['time'] ?></div>
              <div class="status-badge rejected">REJECTED</div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

    <!-- Back to Home Button -->
    <div class="back-home">
      <a href="index.php">⬅️ Back to Home</a>
    </div>

  </div>
</body>
</html>
