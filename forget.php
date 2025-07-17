<?php
session_start();
include('db.php');
include('mail_config.php');

if(isset($_POST['send_otp'])) {
    $email = $_POST['email'];
    
    // Check if email exists
    $qry = "SELECT * FROM users_tbl WHERE email='$email'";
    $res = mysqli_query($con, $qry);
    
    if(mysqli_num_rows($res) > 0) {
        $otp = rand(1000, 9999);
        $_SESSION['reset_otp'] = $otp;
        $_SESSION['reset_email'] = $email;
        
        sendOTP($email, $otp); // OTP bhejo
        header('Location: reset_password.php');
    } else {
        echo "<script>alert('Ye email registered nahi hai!')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <style><style>
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
</style>
</head>
<body>
    <div class="wrapper">
        <form method="post">
            <h2>Forgot Password</h2>
            <div class="field">
                <input type="email" name="email" placeholder="Enter Email" required>
            </div>
            <div class="field btn">
                <input type="submit" name="send_otp" value="Send OTP">
            </div>
        </form>
    </div>
</body>
</html>