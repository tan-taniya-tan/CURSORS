<?php
if(isset($_GET['rollno'])) {
    $conn = mysqli_connect("localhost", "root", "", "taniya");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $rollno = $_GET['rollno'];
    $stmt = $conn->prepare("DELETE FROM flashmob1 WHERE rollno = ?");
    $stmt->bind_param("s", $rollno);
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
    <title>Delete Flashmob Member</title>
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
        <h2>Delete Flashmob Member</h2>

        <?php
        if(isset($_GET['rollno'])) {
           
            echo '<p>Are you sure you want to delete this flashmob member?</p>';
            echo '<form action="flash_table_delete.php" method="POST">';
            echo '<input type="hidden" name="rollno" value="' . $_GET['rollno'] . '">';
            echo '<input type="submit" name="submit" value="Yes">';
            echo '<a href="flashmob_table.php">No</a>';
            echo '</form>';
        } 
        ?>
    </div>
</body>
</html>
