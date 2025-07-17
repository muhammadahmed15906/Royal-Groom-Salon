<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$date = $_POST['date'];
$time = $_POST['time'];
$message = $_POST['message'];

$query = "INSERT INTO pending_requests (name, email, phone, service, date, time, message) 
          VALUES ('$name', '$email', '$phone', '$service', '$date', '$time', '$message')";

if (mysqli_query($con, $query)) {
    echo "<script>alert('Your request has been submitted!'); window.location.href='my_appointments.php';</script>";
} else {
    echo "Error: " . mysqli_error($con);
}
?>
