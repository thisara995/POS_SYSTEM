<?php
session_start();
include 'config/dbcon.php';

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("location: login.php?error=User Name is required");
        exit();
    } else if (empty($password)) {
        header("location: login.php?error=Password is required");
        exit();
    } else {
        // Use prepared statements to prevent SQL injection
        $sql = "SELECT * FROM user WHERE username = ? AND password = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            // $_SESSION['id'] = $row['id'];

            // Redirect to welcome.php upon successful login
            header("location:index.php");
            exit();
        } else {
            // Redirect to login.php with an error message
            header("location: login.php?error=Invalid Username or Password");
            exit();
        }
    }
} else {
    header("location: login.php");
    exit();
}
?>
