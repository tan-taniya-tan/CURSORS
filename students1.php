

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
    <style>
    .container {
    display: flex;
    position: relative;
}

.left-panel {
    position: fixed;
    top: 50%;
    height:100%;
    width:20%;
    transform: translateY(-50%);
    margin-left:-10px;
    background-color:lavender;
}

.buttons {
    
    display: flex;
    flex-direction: column;
    
}

.buttons button {
    margin-bottom: 17px;
    width: 255px;
   
    padding: 30.5px;
    border: none;
  
    background-color: white;
    color:#967bb6;
    cursor: pointer;
    font-size:20px;
    transition: background-color 0.3s ease; 
}

.buttons button:hover {
    background-color: #967bb6;
     color:white;
}
.left{

    margin-left:-20px;
}
    .chart-container {
    width:40%; 
    margin: auto; 
    padding: 20px; 
    box-sizing: border-box; 
    border: 1px solid #ccc; 
    border-radius: 10px; 
    text-align: center; 
    margin-left:-20px;
    margin-top:40px;
}
.visitcount {
    width:40%; 
    margin: auto; 
    padding: 20px; 
    height:40px;
    box-sizing: border-box; 
    border: 1px solid #ccc; 
    border-radius: 10px; 
    text-align: center; 
    margin-right:20px;
    margin-top:-440px;
}

.charts{
    margin-left:400px;
    height:100%;
    width:100%;
    text-align:center;
}
canvas {
    max-width: 100%; 
    height: auto; 
    border-radius: 10px; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
}
.chart-container .faculty-color {
    background-color: lavender;
}

.chart-container .student-color {
    background-color: purple;
}

.chart-container .admin-color {
    background-color: #967bb6;
}
.heading{
    width: 255px;
    background-color:#967bb6;
    color:white;
    height:20%;
    margin-top:-20px;
    text-align:center;
    
}
body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        h2 {
            color: #967bb6;
            margin-left:-150px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
            margin-right:50px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: lavender;
            color: #967bb6;
        }
        tr:nth-child(even) {
            background-color: white;
        }
        tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
</style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
    
    <div class="left-panel">
           
            <div class="buttons">
            
            <button onclick="location.href='travel.php'">Home</button>
           
         
                <button onclick="location.href='decoration_table1.php'">Decoration</button>
                <button onclick="location.href='flashmob_table1.php'">Flashmob</button>
                <button onclick="location.href='students1.php'">Students</button>
                <button onclick="location.href='eventcoordinators.php'">Student Coordinators</button>
                <button onclick="location.href='events1.php'">Events</button>
            </div>
        </div>
        <div class="charts">
       <center> <h2>Student Details</h2></center>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>User Type</th>
            <th>Action</th>
        </tr>
        
        <?php
        
        $conn = mysqli_connect("localhost", "root", "", "taniya");

       
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        
        $sql = "SELECT  `name`,`email`,`user_type` FROM `users` WHERE `user_type` = 'student'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
           
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["user_type"]."</td><td><a href='student1_edit.php?email=".$row["email"]."'>Edit</a> | <a href='student1_delete.php?email=".$row["email"]."'>Delete</a></td></tr>";

            }
        } else {
            echo "<tr><td colspan='3'>No Student members found.</td></tr>";
        }
        $conn->close();
        ?>
        
    </table>
        <div class="left">
        
        
           
           
    </div>

</div>
</div>

</div>
    </div>

    
</body>
</html>

<?php
if(isset($_POST['email'], $_POST['name'], $_POST['user_type'])) {
    
    $conn = mysqli_connect("localhost", "root", "", "taniya");

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $email = $_POST['email'];
    $name = $_POST['name'];
    $user_type = $_POST['user_type'];

    
    $stmt = $conn->prepare("UPDATE users SET `name` = ?, `user_type` = ? WHERE `email` = ?");
    $stmt->bind_param("sss", $name, $user_type, $email);

   
    if ($stmt->execute()) {
        echo "User updated successfully.";
    } else {
        echo "Error updating user: " . $conn->error;
    }

    
    $stmt->close();
    $conn->close();
} else {
    echo "Form data not provided.";
}
?>
