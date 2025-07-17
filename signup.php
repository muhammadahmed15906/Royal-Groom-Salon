<?php
session_start();
include('db.php');
include('mail_config.php');

if(isset($_POST['submit'])) {
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $phone = $_POST['phone'];

    // OTP generate karo (4 digits)
    $otp = rand(1000, 9999);
    $_SESSION['signup_otp'] = $otp;
    $_SESSION['signup_data'] = $_POST; // Save data for after OTP

    // Send OTP via email
    if(sendOTP($email, $otp)) {
        header('Location: signup_otp.php'); // OTP verification page
    } else {
        echo "<script>alert('Try again')</script>";
    }
}
?>