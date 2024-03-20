<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "taniya"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT user_type, COUNT(*) as count FROM users GROUP BY user_type";
$result = $conn->query($sql);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[$row['user_type']] = $row['count'];
}


$conn->close();


header('Content-Type: application/json');
echo json_encode($data);
?>
