<?php
if(isset($_GET['rollno'])) {
    $conn = mysqli_connect("localhost", "root", "", "taniya");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $rollno = $_GET['rollno'];
    $stmt = $conn->prepare("SELECT `name`, `age`, `gender`,`class`,`section`,`event` FROM `decoration1` WHERE `rollno` = ?");
    $stmt->bind_param("s", $rollno);
    $stmt->execute();
    $stmt->bind_result($name, $age, $gender,$class,$section,$event);
    
    $stmt->fetch();

    $stmt->close();
    
    
    $conn->close();
} else {
    echo "Roll No not provided.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: lavender;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
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
    width: 50%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}
input[type="number"] {
    width: 50%;
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
    margin-left:300px;
    padding:20px;
    color:#967bb6;
}

.success {
    color: #008000;
}
</style>
</head>
<body>
<center>   <h2>Edit User</h2></center>
    <form action="decoration_table.php" method="POST">
    <center>  <input type="hidden" name="rollno" value="<?php echo $rollno; ?>"></center>
        <label for="name">Name:</label><br>
        <center>   <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br><br></center>
        <label for="email">Roll No:</label><br>
        <center>   <input type="text" id="rollno" name="rollno" value="<?php echo $rollno; ?>" disabled><br><br></center>
        <label for="age">Age:</label><br>
        <center> <input type="number" id="age" name="age" value="<?php echo $age; ?>"><br><br></center>
        <label for="gender">Gender:</label><br>
        <center> <input type="text" id="gender" name="gender" value="<?php echo $gender; ?>"><br><br></center>
        <label for="class">Class :</label><br>
        <center> <input type="number" id="class" name="class" value="<?php echo $class; ?>"><br><br></center>
        <label for="section">Section:</label><br>
        <center> <input type="text" id="section" name="section" value="<?php echo $section; ?>"><br><br></center>
        <label for="user_type">Previous Participation:</label><br>
        <center> <input type="text" id="event" name="event" value="<?php echo $event; ?>"><br><br></center>
        <center>  <input type="submit" value="Update" style="background-color:#967bb6; color:white;"></center>
    </form>
</body>
</html>
