<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#967bb6;">
<button class="btn" onclick="location.href='frontpage.php'" style="color: white;
    background:#967bb6;
    padding: 8px 12px;
    font-size: 20px;
    border: 2px solid white;
    border-radius: 14px;
    cursor: pointer;
margin-right:1100px;">Go Back</button> 
    <center><h1 style="margin-top:-10px;">Welcome to ANITS College Fest Participation form</h1><br><br></center>

<div class="register"  style="
   
           margin-left:10px; margin-top:-20px;">
     <form action="login.php" method="post" style="margin-right:40%; margin-top:-10px;">
     	<h2 style="color:#967bb6;">LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label style="margin-left:45px;">Email</label>
     	<center><input type="email" name="email" placeholder="Email-id"><br></center>

     	<label  style="margin-left:45px;">Password</label>
     	<center><input type="password" name="password" placeholder="Password"><br></center>

     	<button type="submit" style="color: white;
    background:#967bb6;
    padding: 8px 12px;
    font-size: 20px;
margin-left:100px;
    border: 2px solid white;
    border-radius: 14px;
    cursor: pointer;
">Login</button>
          <a href="signup.php" class="ca" >Create an account</a>
     </form>
</div>
<div class="quote">

 <h1  align="left" style="font-size:55px;font-family:Copperplate;"> <bold>CELEBRATE <br> EACH <br>MOMENT</bold></h1>
</div>
</body>
</html>