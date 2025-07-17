<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $action = $_POST['action'];

    // 1. Get data from pending_requests
    $get = mysqli_query($con, "SELECT * FROM pending_requests WHERE id = '$id'");
    $data = mysqli_fetch_assoc($get);

    if ($data) {
        if ($action === 'accept') {
            // 2. Insert into appointments table
            mysqli_query($con, "INSERT INTO appointments (name, email, phone, service, date, time, message)
                VALUES (
                    '{$data['name']}',
                    '{$data['email']}',
                    '{$data['phone']}',
                    '{$data['service']}',
                    '{$data['date']}',
                    '{$data['time']}',
                    '{$data['message']}'
                )");
        } elseif ($action === 'reject') {
            // 3. Insert into rejected_appointments table
            mysqli_query($con, "INSERT INTO rejected_appointments (name, email, phone, service, date, time, message)
                VALUES (
                    '{$data['name']}',
                    '{$data['email']}',
                    '{$data['phone']}',
                    '{$data['service']}',
                    '{$data['date']}',
                    '{$data['time']}',
                    '{$data['message']}'
                )");
        }

        // 4. Delete from pending_requests in both cases
        mysqli_query($con, "DELETE FROM pending_requests WHERE id = '$id'");
    }
}

// 5. Redirect back to the same page
header("Location: " . $_SERVER['HTTP_REFERER']);
exit;
?>
