<php
?>
<html>
    <head>
        <style>
 .faculty{
    margin-left:250px;
    margin-top:40px;
    float:left;
 } 
body{
background-image:url("pics/flashcoor.jpg");
background-repeat: no-repeat;
  background-size: cover;


}
 .student{
    margin-right:250px;
    margin-top:40px;
    float: right;
 }
 img{
    height:250px;
    width:300px;
 }
 p{
    font-size:20px;
    margin-left:10px;
    color:white;
 }
 h1{
    margin-top:70px;
    color:white;
    margin-top:30px;
 }
 .phoneno{
   margin-left:150px;
 }
.aswinimam{
height:250px;
    width:250px;
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

            </style>
</head>
<body>
<button class="btn" onclick="location.href='flashmob.php'" style="height:50px; width:120px;">Go Back</button> 

    <center>
        <h1>Decoration Coordinators</h1></center>
        <div class="faculty">
        <img src="pics/flashmobfaculty.jpg" id="aswinimam">
       <center> <p>Faculty Coordinator: D.Aswini</p></center>
       <center> <p id="phoneno">9849767589<p></center>
</div>
<div class="student">
        <img src="pics/flashmobcoor.jpg">
       <center> <p>Student Coordinator: R.Harshitha</p><center>
       <center> <p id="phoneno">8125866028</p></center>
       
</div>

</body>
    </html>