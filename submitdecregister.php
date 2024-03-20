<?php
$user = "root";
$pwd = "";
$db = "taniya";
$conn = mysqli_connect("localhost", $user, $pwd, $db);

if (!$conn) {
    die("Unable to connect: " . mysqli_connect_error());
} 
$name = $_POST['name1'];
$age = $_POST['age1'];
$gender = $_POST['gender1'];
$rollno = $_POST['rollno1'];
$class = $_POST['class1'];
$section = $_POST['section1'];
$event = $_POST['event1'];

$add_record_query = "INSERT INTO `decoration1`(`name`, `age`, `gender`,`rollno`,`class`,`section`, `event`) VALUES ('$name', '$age', '$gender','$rollno', '$class','$section','$event')";

if (!mysqli_query($conn, $add_record_query)) {
    echo " Record not inserted into database";
} 
?>

<html>
    <head>
  <style>
    h1{
        margin-top:90px;
        font-size:45px;
        font-family:'Times New Roman', Times, serif;
        margin-top: 90px;
    
    }
    img{
        height:150px;
        width:150px;
        margin-left:550px;
    }
body{
background-image:url("pics/flash1.jpg");
background-repeat: no-repeat;
  background-size: cover;
}
    </style>
</head>
<body>
    <center>
    <h1>Successfully Registered for Decoration Event</h1>
   
</center>
 <img class="ag" src="pics/emoji.jpg">
</body>
    </html>