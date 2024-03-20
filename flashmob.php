<php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
    <style>
        button{
            color: white;
            background: #967bb6;
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
        body{
background-image:url("pics/lavender.jpg");
background-repeat: no-repeat;
  background-size: cover;
}
        .container{
            
            display:flex;
            margin-top:90px;
            margin-left:220px;
        }
        h1{
            color:#967bb6;
            font-size:45px;
            font-family:'Times New Roman', Times, serif;
            margin-top: 90px;
        }
    </style>
</head>
<body>
<button class="btn" onclick="location.href='travel.php'" style="height:50px; width:120px;">Go Back</button> 


<header>
    <h1 align="center">FLASHMOB</h1>
</header>
<center>
<div class="container">
            <div class="s7">
        
            <button onclick="location.href='flashmob_register.php'">Register</button>
        </div>
    
        <div class="s6">
            
            <button onclick="location.href='flashmob_details.php'">VLog</button>
        </div>
    
        <div class="s1">
            
            <button onclick="location.href='flashmob_coor.php'">Coordinators</button>
        </div>
    
        <div class="s9">
            
            <button onclick="location.href='flashmob_print.php'">Participants</button>
        </div>
    
</div>
</center>
</body>
</html>
