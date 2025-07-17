<?php
include 'db.php';
$result = mysqli_query($con, "SELECT * FROM pending_requests");
?>

<h2>Pending Appointments</h2>
<table border="1" cellpadding="10">
  <tr>
    <th>Name</th><th>Email</th><th>Phone</th><th>Service</th><th>Date</th><th>Time</th><th>Actions</th>
  </tr>
  <?php while($row = mysqli_fetch_assoc($result)): ?>
  <tr>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['phone'] ?></td>
    <td><?= $row['service'] ?></td>
    <td><?= $row['date'] ?></td>
    <td><?= $row['time'] ?></td>
    <td>
      <form action="handle_request.php" method="POST" style="display:inline;">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <button type="submit" name="action" value="accept">Accept</button>
        <button type="submit" name="action" value="reject">Reject</button>
      </form>
    </td>
  </tr>
  <?php endwhile; ?>
</table>
