<?php
session_start();
include('db.php');

// Agar OTP submit hua ho
if(isset($_POST['verify_otp'])) {
    $user_otp = $_POST['otp'];
    $stored_otp = $_SESSION['signup_otp']; // Session mein save OTP
if ($user_otp == $stored_otp) {
    $name = $_SESSION['signup_data']['fname'];
    $email = $_SESSION['signup_data']['email'];
    $pass = $_SESSION['signup_data']['password'];
    $phone = $_SESSION['signup_data']['phone'];

    $qry = "INSERT INTO users_tbl (Fullname, email, PASSWORD, phone) 
            VALUES ('$name', '$email', '$pass', '$phone')";
    mysqli_query($con, $qry);

    // ✅ Fix: Set fname in session for profile.php
    $_SESSION['fname'] = $name;
    $_SESSION['email'] = $email;

    header('location: index.php');
    exit();
}

     else {
        echo "<script>alert('Galat OTP! Phir se try karo.')</script>";
    }
}

// Resend OTP
if(isset($_POST['resend_otp'])) {
    $new_otp = rand(1000, 9999); // New OTP generate karo
    $_SESSION['signup_otp'] = $new_otp;
    // Yahan PHPMailer se OTP bhejo (uska code alag se dikhaunga)
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>OTP Verify</title>
    <!-- Same CSS as index.php -->
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
      margin-bottom: 15px;
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

    button[name="resend_otp"] {
      background: none;
      border: 2px solid #f29756;
      color: #f29756;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 15px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    button[name="resend_otp"]:hover {
      background: #f29756;
      color: white;
    }
</style>

    
</head>
<body>
    <div class="wrapper">
        <form method="post">
            <h2>OTP Verification</h2>
            <div class="field">
                <input type="text" name="otp" placeholder="Enter OTP" required>
            </div>
            <div class="field btn">
                <input type="submit" name="verify_otp" value="Verify OTP">
            </div>
            <button type="submit" name="resend_otp">Resend OTP</button>
        </form>
    </div>
</body>
</html>