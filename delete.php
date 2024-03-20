<?php
if(isset($_GET['email'])) {
    $conn = mysqli_connect("localhost", "root", "", "taniya");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $email = $_GET['email'];
    $stmt = $conn->prepare("DELETE FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    if ($stmt->execute()) {
        echo "";
    } else {
        echo "Error deleting user: " . $conn->error;
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Faculty Member</title>
    <style>

body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    margin-top:10%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    margin-top: 0;
    color: #333;
}

form {
    margin-top: 20px;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

.error {
    color: #ff0000;
}

label {
    font-weight: bold;
}

.success {
    color: #008000;
}
a{
    margin:10px;
}
</style>
</head>
<body>
    <div class="container">
        <h2>Delete Faculty Member</h2>

        <?php
        if(isset($_GET['email'])) {
           
            echo '<p>Are you sure you want to delete this faculty member?</p>';
            echo '<form action="delete.php" method="POST">';
            echo '<input type="hidden" name="email" value="' . $_GET['email'] . '">';
            echo '<input type="submit" name="submit" value="Yes">';
            echo '<a href="faculty.php">No</a>';
            echo '</form>';
        } 
        ?>
    </div>
</body>
</html>
