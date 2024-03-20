
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
    <style>
       .go{

}
        button{
             background-color: #967bb6;
            color:white;
            padding: 8px 12px;
            font-size: 20px;
            border: 2px solid white;
            border-radius: 14px;
            cursor: pointer;
            height: 100px;
            width:85%;            
            margin-right: 50px;
            font-family: 'Times New Roman', Times, serif;
        }
        .left{
            margin-left: 50px;
            display:flex;
        }
        .right{
            margin-right: 50px;
            display:flex;
        }
        .container{
            margin-right: 50px;
            display:flex;
            margin-top:90px;
        }
        h1{
             color: #967bb6;

            font-size:45px;
            font-family:'Times New Roman', Times, serif;
            margin-top: 90px;
        }

        body {
            background-image: url('pics/one.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            animation: changeBackground 20s infinite;
        }

        @keyframes changeBackground {
           0% { background-image: url('pics/eleven.jpg'); }
            10% { background-image: url('pics/ten.jpg'); }
            20% { background-image: url('pics/two.jpg'); }
            30% { background-image: url('pics/one.jpg'); }
            40% { background-image: url('pics/seven.jpg'); }
            50% { background-image: url('pics/five.jpg'); }
            60% { background-image: url('pics/one.jpg'); }
            70% {background-image: url('pics/seven.jpg'); }
            80% {background-image: url('pics/eight.jpg'); }
            90% {background-image: url('pics/five.jpg'); }
            100% {background-image: url('pics/eleven.jpg');  }
        }   
    </style>
</head>
<body>
<header>
    <h1 align="center">Event Registration</h1>
</header>
<center>
<div class="container">


    <div class="left">
        <div class="s7">
        
            <button onclick="location.href='decoration.php'">DECORATION</button>
        </div>
    
        <div>
            
            <button onclick="location.href='flashmob.php'">FLASH MOB</button>
        </div>
    
        <div class="s1">
            
            <button onclick="location.href='technicalevents.php'">TECHNICAL EVENTS</button>
        </div>
    </div>
    <div class="right">
        <div class="s2">
        
            <button onclick="location.href='nontechnicalevents.php'">NON TECHNICAL EVENTS</button>
        </div>
        <div class="s5">
            
            <button onclick="location.href='eventcoordinators.php'"> EVENT COORDINATORS</button>
        </div>
        <div class="s8">
            
            <button onclick="location.href='faculty_coordinators.php'">FACULTY COORDINATORS</button>
        </div>
    </div>

    
</div>
</center>
<center><div class="go" style="margin-top:100px;">
<button id="goback" onclick="location.href='login.php'" style="height:40px;
width:120px; margin-bottom:20px;">Go Back</button>
</div></center>

</body>
</html>
