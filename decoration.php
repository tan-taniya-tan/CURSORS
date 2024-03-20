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
body{
background-image:url("pics/lavender1.jpg");
background-repeat: no-repeat;
  background-size: cover;
}

        
        .container{
            
            display:flex;
            margin-top:90px;
            margin-left:220px;
        }
        h1{
            color:white;
            font-size:45px;
            font-family:'Times New Roman', Times, serif;
                    }
    </style>
</head>
<body>
<button class="btn" onclick="location.href='travel.php'" style="height:50px; width:120px;">Go Back</button> 
<header>
    <h1 align="center">DECORATION</h1>
</header>
<center>
<div class="container">
    
        <div class="s7">
        
            <button onclick="location.href='decregister.php'">Register</button>
        </div>
    
        <div class="s6">
            
            <button onclick="location.href='decdetails.php'">VLog</button>
        </div>
    
        <div class="s1">
            
            <button onclick="location.href='deccoor.php'">Coordinators</button>
        </div>
    
        <div class="s9">
            
            <button onclick="location.href='decprint.php'">Participants</button>
        </div>
    
</div>
</center>
</body>
</html>
