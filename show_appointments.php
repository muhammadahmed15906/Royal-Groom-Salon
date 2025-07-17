<?php
session_start();
if ($_SESSION['email'] != 'admin@gmail.com') {
    header('Location: index.php');
    exit;
}
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Confirmed Appointments</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #121212;
      color: #e0e0e0;
      padding: 40px;
    }
    .admin-title {
      text-align: center;
      color: #f29756;
      margin-bottom: 20px;
    }
    table {
      width: 100%;
      background: #1a1a1a;
      border-radius: 8px;
      overflow: hidden;
    }
    th, td {
      padding: 12px;
      border-bottom: 1px solid #333;
    }
    th {
      background: #222;
      color: #f29756;
    }
    tr:hover {
      background: #2a2a2a;
    }
    a.btn-back {
      margin-bottom: 20px;
      border-radius: 6px;
    }
  </style>
</head>
<body>

<h2 class="admin-title">Confirmed Appointments</h2>
<a href="admin.php" class="btn btn-warning btn-back">← Back to Manage</a>

<table>
  <thead>
    <tr>
      <th>Name</th><th>Email</th><th>Phone</th><th>Service</th>
      <th>Date</th><th>Time</th><th>Message</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $result = mysqli_query($con, "SELECT * FROM appointments ORDER BY date ASC, time ASC");
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
              <td>{$row['name']}</td>
              <td>{$row['email']}</td>
              <td>{$row['phone']}</td>
              <td>{$row['service']}</td>
              <td>{$row['date']}</td>
              <td>{$row['time']}</td>
              <td>{$row['message']}</td>
            </tr>";
    }
    ?>
  </tbody>
</table>

</body>
</html>
