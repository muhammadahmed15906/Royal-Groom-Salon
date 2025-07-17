<?php
session_start();
include('db.php');

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // Admin login shortcut
    if($email == 'admin@gmail.com' && $pass == '20250000') {
        $_SESSION['email'] = $email;
        header('Location: admin.php');
        exit();
    }

    $qry = "SELECT * FROM users_tbl WHERE email='$email' AND PASSWORD='$pass'";
    $res = mysqli_query($con, $qry);

    if(mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_array($res);
        
        // ✅ Update this to match your actual DB column name (e.g., fullname or Fullname)
        $_SESSION['fname'] = $row['Fullname']; 
        $_SESSION['email'] = $row['email'];

        header('Location: index.php');
    } else {
        echo "<script>alert('Login failed!')</script>";
    }
}
?>
