<?php 
session_start(); 
include "db.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if (empty($email)) {
        header("Location: login.php?error=Email is required");
        exit();
    } else if (empty($pass)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM `users` WHERE email='$email' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_type'] = $row['user_type'];

            if ($_SESSION['user_type'] === 'faculty') {
                header("Location: students1.php");
                exit();
            } elseif ($email === "taniyasinguru18@gmail.com" && $pass === "123tan" && $_SESSION['user_type'] === 'admin') {
                header("Location: admin_verify.php");
                exit();
            } else {
                header("Location: travel.php");
                exit();
            }
        } else {
            header("Location: travel.php?error=Invalid email or password");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}
?>
