<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'Poppins', sans-serif;
        }
        body{
             background-image: url('1.jpg');
              background-size: cover;
              background-position: center;
              background-repeat: no-repeat;
              display: flex;
              justify-content: center;
        }
        html{
          display: grid;
          height: 100%;
          width: 100%;
          place-items: center;
        }
        .wrapper {
          border: 3px solid #a0522d;
          border-radius: 12px;
          padding: 20px;
          animation: brownGlow 2s ease-in-out infinite;
          box-shadow: 0 0 6px #a0522d, 0 0 12px #a0522d;
        }

        @keyframes brownGlow {
          0% { box-shadow: 0 0 6px #a0522d, 0 0 12px #a0522d; }
          50% { box-shadow: 0 0 12px #d2691e, 0 0 24px #d2691e; }
          100% { box-shadow: 0 0 6px #a0522d, 0 0 12px #a0522d; }
        }

        ::selection{
          background: #f29756;
          color: #fff;
        }
        .wrapper{
          overflow: hidden;
          max-width: 390px;
          background:rgba(0, 0, 0, 0.56);
          padding: 30px;
          border-radius: 15px;
          box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
        }
        .wrapper .title-text{
          display: flex;
          width: 200%;
        }
        .wrapper .title{
          width: 50%;
          font-size: 35px;
          font-weight: 600;
          text-align: center;
          transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
        }
        .wrapper .slide-controls{
          position: relative;
          display: flex;
          height: 50px;
          width: 100%;
          overflow: hidden;
          margin: 30px 0 10px 0;
          justify-content: space-between;
          border: 1px solid lightgrey;
          border-radius: 15px;
        }
        .slide-controls .slide{
          height: 100%;
          width: 100%;
          color: #fff;
          font-size: 18px;
          font-weight: 500;
          text-align: center;
          line-height: 48px;
          cursor: pointer;
          z-index: 1;
          transition: all 0.6s ease;
        }
        .slide-controls label.signup{
          color: #000;
        }
        .slide-controls .slider-tab {
          position: absolute;
          height: 100%;
          width: 50%;
          left: 0;
          z-index: 0;
          border-radius: 15px;
          background: linear-gradient(to right, #5c4033, #a0522d, #d2691e, #f29756);
          transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
        }

        input[type="radio"]{
          display: none;
        }
        #signup:checked ~ .slider-tab{
          left: 50%;
        }
        #signup:checked ~ label.signup{
          color: #fff;
          cursor: default;
          user-select: none;
        }
        #signup:checked ~ label.login{
          color: #000;
        }
        #login:checked ~ label.signup{
          color: #000;
        }
        #login:checked ~ label.login{
          cursor: default;
          user-select: none;
        }
        .wrapper .form-container{
          width: 100%;
          overflow: hidden;
        }
        .form-container .form-inner{
          display: flex;
          width: 200%;
        }
        .form-container .form-inner form{
          width: 50%;
          transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
        }
        .form-inner form .field{
          height: 50px;
          width: 100%;
          margin-top: 20px;
        }
        .form-inner form .field input{
          height: 100%;
          width: 100%;
          outline: none;
          padding-left: 15px;
          border-radius: 15px;
          border: 1px solid lightgrey;
          border-bottom-width: 2px;
          font-size: 17px;
          transition: all 0.3s ease;
        }
        .form-inner form .field input:focus{
          border-color: #f29756;
        }
        .form-inner form .field input::placeholder{
          color: #999;
          transition: all 0.3s ease;
        }
        form .field input:focus::placeholder{
          color: #f29756;
        }
        .form-inner form .pass-link{
          margin-top: 5px;
        }
        .form-inner form .signup-link{
          text-align: center;
          margin-top: 30px;
        }
        .form-inner form .pass-link a,
        .form-inner form .signup-link a{
          color: #f29756;
          text-decoration: none;
        }
        .form-inner form .pass-link a:hover,
        .form-inner form .signup-link a:hover{
          text-decoration: underline;
        }
        form .btn{
          height: 50px;
          width: 100%;
          border-radius: 15px;
          position: relative;
          overflow: hidden;
        }
        form .btn .btn-layer{
          height: 100%;
          width: 300%;
          position: absolute;
          left: -100%;
          background: linear-gradient(to right, #5c4033, #a0522d, #d2691e, #f29756);
          border-radius: 15px;
          transition: all 0.4s ease;;
        }
        form .btn:hover .btn-layer{
          left: 0;
        }
        form .btn input[type="submit"]{
          height: 100%;
          width: 100%;
          z-index: 1;
          position: relative;
          background: none;
          border: none;
          color: white;
          padding-left: 0;
          border-radius: 15px;
          font-size: 20px;
          font-weight: 500;
          cursor: pointer;
        }

        /* Modal styles */
        .modal {
          display: none;
          position: fixed;
          z-index: 100;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(0,0,0,0.7);
        }
        .modal-content {
          background-color: rgba(0, 0, 0, 0.56);
          margin: 10% auto;
          padding: 30px;
          border: 3px solid #a0522d;
          border-radius: 12px;
          width: 400px;
          max-width: 90%;
          animation: brownGlow 2s ease-in-out infinite;
          box-shadow: 0 0 6px #a0522d, 0 0 12px #a0522d;
          color: white;
        }
        .close {
          color: #f29756;
          float: right;
          font-size: 28px;
          font-weight: bold;
          cursor: pointer;
        }
        .close:hover {
          color: #d2691e;
        }
    </style>
</head>
<body>
      <div class="wrapper">
      <div class="title-text">
        <div class="title login" style="color:#fcba27; ">Login Form</div>
        <div class="title signup"style="color:#fcba27; ">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login"style="color:white; ">Login</label>
          <label for="signup" class="slide signup"style="color:white; ">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="signin.php" method="post" class="login">
            <div class="field">
              <input type="email" placeholder="Email Address" required name="email">
            </div>
            <div class="field">
              <input type="password" placeholder="Password" required name="password">
            </div>
            <div class="pass-link"><a href="forget.php"  style="color:white; ">Forgot password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login" name="submit">
            </div>
            <div class="signup-link"style="color:white; ">Not a member? <a href="" style="color:#f29756 ; ">Signup now</a></div>
          </form>
          <form action="signup.php" method="post" class="signup">
            <div class="field">
              <input type="text" placeholder="Full Name" name="fname" required>
            </div>
            <div class="field">
              <input type="email" placeholder="Email Address" name="email" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Password" required name="password">
            </div>
            <div class="field">
              <input type="text" placeholder="phone" required name="phone">
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="submit" value="Signup">
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Forgot Password Modal -->
    <div id="forgotModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2 style="color:#fcba27; text-align: center; margin-bottom: 20px;">Reset Password</h2>
        <form id="forgotForm">
          <div class="field">
            <input type="email" id="resetEmail" placeholder="Enter your email" required>
          </div>
          <div class="field btn" style="margin-top: 20px;">
            <div class="btn-layer"></div>
            <input type="submit" value="Send OTP">
          </div>
        </form>
      </div>
    </div>

    <!-- OTP Verification Modal -->
    <div id="otpModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2 style="color:#fcba27; text-align: center; margin-bottom: 20px;">OTP Verification</h2>
        <p style="text-align: center; margin-bottom: 15px;">We've sent a 6-digit OTP to your email</p>
        <form id="otpForm">
          <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
            <input type="text" name="otp1" maxlength="1" pattern="[0-9]" required style="width: 15%; height: 50px; text-align: center; font-size: 20px; border-radius: 10px; border: 1px solid lightgrey;">
            <input type="text" name="otp2" maxlength="1" pattern="[0-9]" required style="width: 15%; height: 50px; text-align: center; font-size: 20px; border-radius: 10px; border: 1px solid lightgrey;">
            <input type="text" name="otp3" maxlength="1" pattern="[0-9]" required style="width: 15%; height: 50px; text-align: center; font-size: 20px; border-radius: 10px; border: 1px solid lightgrey;">
            <input type="text" name="otp4" maxlength="1" pattern="[0-9]" required style="width: 15%; height: 50px; text-align: center; font-size: 20px; border-radius: 10px; border: 1px solid lightgrey;">
            <input type="text" name="otp5" maxlength="1" pattern="[0-9]" required style="width: 15%; height: 50px; text-align: center; font-size: 20px; border-radius: 10px; border: 1px solid lightgrey;">
            <input type="text" name="otp6" maxlength="1" pattern="[0-9]" required style="width: 15%; height: 50px; text-align: center; font-size: 20px; border-radius: 10px; border: 1px solid lightgrey;">
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Verify OTP">
          </div>
        </form>
      </div>
    </div>

    <!-- New Password Modal -->
    <div id="newPasswordModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2 style="color:#fcba27; text-align: center; margin-bottom: 20px;">Set New Password</h2>
        <form id="newPasswordForm">
          <div class="field">
            <input type="password" id="newPassword" placeholder="New Password" required>
          </div>
          <div class="field">
            <input type="password" id="confirmPassword" placeholder="Confirm Password" required>
          </div>
          <div class="field btn" style="margin-top: 20px;">
            <div class="btn-layer"></div>
            <input type="submit" value="Update Password">
          </div>
        </form>
      </div>
    </div>

<script> 
const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
signupBtn.onclick = (()=>{
  loginForm.style.marginLeft = "-50%";
  loginText.style.marginLeft = "-50%";
});
loginBtn.onclick = (()=>{
  loginForm.style.marginLeft = "0%";
  loginText.style.marginLeft = "0%";
});
signupLink.onclick = (()=>{
  signupBtn.click();
  return false;
});

// Modal functionality
const forgotModal = document.getElementById("forgotModal");
const otpModal = document.getElementById("otpModal");
const newPasswordModal = document.getElementById("newPasswordModal");
const forgotPasswordLink = document.getElementById("forgotPassword");
const closeButtons = document.getElementsByClassName("close");

// Open forgot password modal
forgotPasswordLink.onclick = function(e) {
  e.preventDefault();
  forgotModal.style.display = "block";
}

// Close modals when clicking X
for (let i = 0; i < closeButtons.length; i++) {
  closeButtons[i].onclick = function() {
    forgotModal.style.display = "none";
    otpModal.style.display = "none";
    newPasswordModal.style.display = "none";
  }
}

// Close modals when clicking outside
window.onclick = function(event) {
  if (event.target == forgotModal) {
    forgotModal.style.display = "none";
  }
  if (event.target == otpModal) {
    otpModal.style.display = "none";
  }
  if (event.target == newPasswordModal) {
    newPasswordModal.style.display = "none";
  }
}
// Forgot password form submission
document.getElementById("forgotForm").onsubmit = function(e) {
  e.preventDefault();
  const email = document.getElementById("resetEmail").value;
  
  // Send email to server for OTP generation
  fetch('send_otp.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({ email: email })
  })
  .then(response => response.json())
  .then(data => {
    if(data.success) {
      forgotModal.style.display = "none";
      otpModal.style.display = "block";
    } else {
      alert("Error: " + data.message);
    }
  })
  .catch(error => {
    console.error('Error:', error);
    alert("An error occurred while sending OTP");
  });
};

// OTP form submission
document.getElementById("otpForm").onsubmit = function(e) {
  e.preventDefault();
  const formData = new FormData(e.target);
  const otp = Array.from(formData.values()).join('');
  
  // Verify OTP with server
  fetch('verify_otp.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({ 
      email: document.getElementById("resetEmail").value,
      otp: otp 
    })
  })
  .then(response => response.json())
  .then(data => {
    if(data.success) {
      otpModal.style.display = "none";
      newPasswordModal.style.display = "block";
    } else {
      alert("Error: " + data.message);
    }
  })
  .catch(error => {
    console.error('Error:', error);
    alert("An error occurred while verifying OTP");
  });
};

// New password form submission
document.getElementById("newPasswordForm").onsubmit = function(e) {
  e.preventDefault();
  const newPassword = document.getElementById("newPassword").value;
  const confirmPassword = document.getElementById("confirmPassword").value;
  
  if(newPassword !== confirmPassword) {
    alert("Passwords don't match!");
    return;
  }
  
  // Update password on server
  fetch('update_password.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({ 
      email: document.getElementById("resetEmail").value,
      password: newPassword 
    })
  })
  .then(response => response.json())
  .then(data => {
    if(data.success) {
      alert("Password updated successfully!");
      newPasswordModal.style.display = "none";
    } else {
      alert("Error: " + data.message);
    }
  })
  .catch(error => {
    console.error('Error:', error);
    alert("An error occurred while updating password");
  });
};

// Auto-focus next OTP input field
const otpInputs = document.querySelectorAll('#otpForm input[name^="otp"]');
otpInputs.forEach((input, index) => {
  input.addEventListener('input', (e) => {
    if(e.target.value.length === 1 && index < otpInputs.length - 1) {
      otpInputs[index + 1].focus();
    }
  });
  
  // Allow backspace to move to previous field
  input.addEventListener('keydown', (e) => {
    if(e.key === 'Backspace' && e.target.value.length === 0 && index > 0) {
      otpInputs[index - 1].focus();
    }
  });
});

</script>
</body>
</html>