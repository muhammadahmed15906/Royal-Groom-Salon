<?php
session_start();
include('db.php');

if(!isset($_SESSION['reset_email'])) {
    header('Location: forget.php'); // Direct access block
}

if(isset($_POST['reset_pass'])) {
    $otp = $_POST['otp'];
    $new_pass = $_POST['new_pass'];
    $confirm_pass = $_POST['confirm_pass'];

    if($new_pass != $confirm_pass) {
        echo "<script>alert('Password match nahi karta!')</script>";
    } elseif($otp != $_SESSION['reset_otp']) {
        echo "<script>alert('Galat OTP!')</script>";
    } else {
        // Update password in DB
        $email = $_SESSION['reset_email'];
        $qry = "UPDATE users_tbl SET password='$new_pass' WHERE email='$email'";
        mysqli_query($con, $qry);
        session_destroy();
        header('Location: index.php?reset=success');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
   <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-image: url('1.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .wrapper {
      border: 3px solid #a0522d;
      border-radius: 12px;
      padding: 30px;
      animation: brownGlow 2s ease-in-out infinite;
      box-shadow: 0 0 6px #a0522d, 0 0 12px #a0522d;
      background: rgba(0, 0, 0, 0.56);
      max-width: 400px;
      width: 90%;
      text-align: center;
    }

    @keyframes brownGlow {
      0% { box-shadow: 0 0 6px #a0522d, 0 0 12px #a0522d; }
      50% { box-shadow: 0 0 12px #d2691e, 0 0 24px #d2691e; }
      100% { box-shadow: 0 0 6px #a0522d, 0 0 12px #a0522d; }
    }

    .wrapper h2 {
      color: #fcba27;
      margin-bottom: 25px;
      font-size: 28px;
    }

    .field {
      height: 50px;
      width: 100%;
      margin-bottom: 20px;
    }

    .field input {
      height: 100%;
      width: 100%;
      padding-left: 15px;
      border-radius: 15px;
      border: 1px solid lightgrey;
      border-bottom-width: 2px;
      font-size: 17px;
      outline: none;
      transition: all 0.3s ease;
    }

    .field input:focus {
      border-color: #f29756;
    }

    .btn {
      position: relative;
      overflow: hidden;
      height: 50px;
      width: 100%;
      border-radius: 15px;
      margin-top: 10px;
    }

    .btn input[type="submit"] {
      height: 100%;
      width: 100%;
      background: linear-gradient(to right, #5c4033, #a0522d, #d2691e, #f29756);
      border: none;
      color: white;
      font-size: 20px;
      font-weight: 500;
      border-radius: 15px;
      cursor: pointer;
      z-index: 1;
      position: relative;
    }
</style>
</head>
<body>
    <div class="wrapper">
        <form method="post">
            <h2>Reset Password</h2>
            <div class="field">
                <input type="text" name="otp" placeholder="Enter OTP" required>
            </div>
            <div class="field">
                <input type="password" name="new_pass" placeholder="New Password" required>
            </div>
            <div class="field">
                <input type="password" name="confirm_pass" placeholder="Confirm Password" required>
            </div>
            <div class="field btn">
                <div class="btn-layer"></div>
                <input type="submit" name="reset_pass" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>