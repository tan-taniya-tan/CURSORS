<php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decoration Event Registration</title>
    <style>
        

.container{
    max-width: 80%; 
    max-height: 500px;
    padding: 34px; 
    margin: auto;
}

 h1 {
    align:center;
    font-family: 'Sriracha', cursive;
    font-size: 35px;
color:wheatgold;
margin-top:-20px;
}
img{
        width: 200px;
        height: 300px;
        object-fit: cover;
      filter: blur(5px);
z-index: -1;
}
button{
            color:#967bb6;
            background: white;
            padding: 8px 12px;
            font-size: 20px;
            border: 2px solid white;
            border-radius: 14px;
            cursor: pointer;
                        margin-right: 100px;
            font-family: 'Times New Roman', Times, serif;
        }

 body{
background-image:url("pics/decreg.jpg");
background-repeat: no-repeat;
  background-size: cover;

}


p{
    font-size: 17px;
    text-align: center;
    font-family: 'Sriracha', cursive;
}

input{
    
    border: 2px solid black;
    border-radius: 6px;
    outline: none;
    font-size: 16px;
    width: 80%;
    margin: 11px 0px;
    padding: 7px;
}

.btn{
    color: white;
    background: #967bb6;
    padding: 8px 12px;
    font-size: 15px;
    border: 2px solid white;
    border-radius: 14px;
    cursor: pointer;
}

    </style>
</head>
<body>
<button class="btn" onclick="location.href='flashmob.php'" style="height:40px; width:90px;">Go Back</button> 

<center>
<h1>Flashmob Event Registration</h1>

<form action="submit_flashmob_register.php" method="post">
<input type="text" name="name1" id="name1" placeholder="Enter your name">
            <input type="text" name="age1" id="age1" placeholder="Enter your Age">
            <input type="text" name="gender1" id="gender1" placeholder="Enter your gender">
            <input type="text" name="rollno1" id="rollno1" placeholder="Enter your Registration Number">
            <input type="number" name="class1" id="class1" placeholder="Enter the year you are studing">
            <input type="text" name="section1" id="section1" placeholder="Enter your section">
            <input type="text" name="event1" id="event1" placeholder="Previously participated in Flashmob or not?">
            <br><br><br>
            <button class="btn" style="height:50px; width:100px; font-size: 20px;">Submit</button> 
</form>
</center>
</body>
</html>
