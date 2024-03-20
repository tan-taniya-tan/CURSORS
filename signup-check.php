<?php 
session_start(); 
include "db.php";

if (isset($_POST['email']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password']) && isset($_POST['user_type'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);
    $re_pass = validate($_POST['re_password']);
    $name = validate($_POST['name']);
    $user_type = validate($_POST['user_type']); // New validation for user_type

    $user_data = 'email='. $email. '&name='. $name . '&user_type=' . $user_type; // Update user data

    if (empty($email)) {
        header("Location: signup.php?error=Email is required&$user_data");
        exit();
    } else if (empty($pass)) {
        header("Location: signup.php?error=Password is required&$user_data");
        exit();
    } else if (empty($re_pass)) {
        header("Location: signup.php?error=Re Password is required&$user_data");
        exit();
    } else if (empty($name)) {
        header("Location: signup.php?error=Name is required&$user_data");
        exit();
    } else if (empty($user_type)) {
        header("Location: signup.php?error=User type is required&$user_data"); // Add validation for user_type
        exit();
    } else if ($pass !== $re_pass) {
        header("Location: signup.php?error=The confirmation password does not match&$user_data");
        exit();
    } else {
        // Check if someone other than the authorized person tries to register as admin
        if ($user_type === 'admin' && $email !== 'taniyasinguru18@gmail.com') {
            header("Location: signup.php?error=You are not authorized to register as admin&$user_data");
            exit();
        }

       
        $sql = "SELECT * FROM `users` WHERE email='$email' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: signup.php?error=The email is already registered&$user_data");
            exit();
        } else {
           
            $sql2 = "INSERT INTO `users`(email, password, name, user_type) VALUES('$email', '$pass', '$name', '$user_type')"; // Update query to include user_type
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                if ($user_type === 'faculty') {
                    header("Location: students1.php?success=Your account has been created successfully");
                } else {
                    header("Location: travel.php?success=Your account has been created successfully");
                }
                exit();
            } else {
                header("Location: signup.php?error=Unknown error occurred&$user_data");
                exit();
            }
        }
    }
    
} else {
    header("Location: travel1.php");
    exit();
}
?>
