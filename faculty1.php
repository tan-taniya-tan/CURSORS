<?php include 'visitcount.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details Pie Chart</title>
    
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
    margin-top:20%;
    display: flex;
    flex-direction: column;
    
}

.buttons button {
    margin-top:-10px;
    margin-bottom: 20px;
    width: 255px;
    padding: 25px;
    border: none;
    background-color: white;
    color:#967bb6;
    cursor: pointer;
    font-size:20px;
    transition: background-color 0.3s ease; 
}
.coordinators button{
    margin-top:45px;
   
    width: 255px;
    padding: 20px;
    border: none;
    background-color:lavender;
    color:white;
    cursor: pointer;
    font-size:20px;
    margin-left:350px;
    transition: background-color 0.3s ease;
   
}
.coordinators button{
    background-color:#967bb6;
     color:white;
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
    margin-top:-500px;
}

.bar-graph{
    margin-left:200px;
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
</style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
    <center> <h1>Hi,Taniya</h1></center>
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
        
    </div>



</body>
</html>