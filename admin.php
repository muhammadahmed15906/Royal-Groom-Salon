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
  <title>Admin Panel | Royal Groom</title>
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
    .btn-manage, .btn-show {
      margin: 10px 10px 30px 0;
      border-radius: 8px;
    }
    .btn-accept {
      background-color: #28a745; color: white;
    }
    .btn-reject {
      background-color: #dc3545; color: white;
    }
    .btn-accept:hover { background-color: #218838; }
    .btn-reject:hover { background-color: #c82333; }
    table { width: 100%; background: #1a1a1a; border-radius: 8px; overflow: hidden; }
    th, td { padding: 12px; border-bottom: 1px solid #333; }
    th { background: #222; color: #f29756; }
    tr:hover { background: #2a2a2a; }
  </style>
</head>
<body>

<h2 class="admin-title">Admin Panel - Pending Requests</h2>

<a href="admin.php" class="btn btn-warning btn-manage">Manage</a>
<a href="show_appointments.php" class="btn btn-primary btn-show">Show Confirmed</a>

<table>
  <thead>
    <tr>
      <th>Name</th><th>Email</th><th>Phone</th><th>Service</th>
      <th>Date</th><th>Time</th><th>Message</th><th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $query = "SELECT * FROM pending_requests";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
              <td>{$row['name']}</td>
              <td>{$row['email']}</td>
              <td>{$row['phone']}</td>
              <td>{$row['service']}</td>
              <td>{$row['date']}</td>
              <td>{$row['time']}</td>
              <td>{$row['message']}</td>
              <td>
                <form action='handle_request.php' method='POST' style='display:inline-block;'>
                  <input type='hidden' name='id' value='{$row['id']}'>
                  <input type='hidden' name='action' value='accept'>
                  <button type='submit' class='btn btn-sm btn-accept'>Accept</button>
                </form>
                <form action='handle_request.php' method='POST' style='display:inline-block; margin-left:6px;'>
                  <input type='hidden' name='id' value='{$row['id']}'>
                  <input type='hidden' name='action' value='reject'>
                  <button type='submit' class='btn btn-sm btn-reject'>Reject</button>
                </form>
              </td>
            </tr>";
    }
    ?>
  </tbody>
</table>

</body>
</html>
