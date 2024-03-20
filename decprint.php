<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheets">
        
<style>
body{
background-image:url("pics/decor1.jpg");
background-repeat: no-repeat;
  background-size: cover;
}
button{
            color:#967bb6;
            background: white;
            padding: 8px 12px;
            font-size: 20px;
            border: 2px solid white;
            border-radius: 14px;
            cursor: pointer;
            height: 100px;
            width:85%;
            margin-right: 100px;
            font-family: 'Times New Roman', Times, serif;
        }

h1{
color:white;
}
td, th {
  border: 1px solid purple;
  text-align: left;
  padding: 8px;
color:white;
}

tr:nth-child(even) {
  background-color:#990099;
}
</style>
<head>
            <body>
<button class="btn" onclick="location.href='decoration.php'" style="height:50px; width:120px;">Go Back</button>
            <center>
                <h1 align="center">Participants in Decoration<h1>
                    <br>
                    <table class="table table-striped">
                   
<tbody>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "taniya";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM decoration1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>NAME</th><th>AGE</th><th>GENDER</th><th>ROLL NUMBER</th><th>CLASS</th><th>SECTION</th><th>PREVIOUS PARTICIPATION</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["rollno"]."</td><td>".$row["class"]."</td><td>".$row["section"]."</td><td>".$row["event"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

?>

</tbody>    
</table>
</center>
</body>
</html>


