<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:#967bb6;">
<button class="btn" onclick="location.href='frontpage.php'" >Go Back</button> 
    <center><h1 style="margin-top:-10px;">Welcome to ANITS College Fest Participation form</h1><br><br></center>
<div class="register" style="background-color:white; height:55%;">

     <form action="signup-check.php" method="post">
     	<h2 style="color:#967bb6;">SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label style="margin-left:45px;">Name</label>
          <?php if (isset($_GET['name'])) { ?>
              <center> <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br></center>

          <?php }else{ ?>
               <center><input type="text" 
                      name="name" 
                      placeholder="Name"><br></center>

          <?php }?>

          <label style="margin-left:45px;">Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="email" 
                      name="email" 
                      placeholder="Email-id"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
              <center> <input type="email" 
                      name="email" 
                      placeholder="E-mail"><br></center>
          <?php }?>


     	<label style="margin-left:45px;">Password</label>
     	<center><input type="password" 
                 name="password" 
                 placeholder="Password"><br></center>

          <label style="margin-left:45px;">Confirm Password</label>
          <center><input type="password" 
                 name="re_password" 
                 placeholder="Confirm Password"><br></center>

                 <label style="margin-left:45px;">User Type</label><br>
               <select name="user_type" style="margin-left:41px;  border: 2px solid black;
    border-radius: 6px;
    outline: none;
    font-size: 16px;
    width: 80%;
    
    padding: 7px;
    margin-top:12px;
    padding-top: 20px;">
    <option value="none" selected>User Type</option>
         <option value="faculty">faculty</option>
         <option value="admin">admin</option>
         <option value="student">student</option>
      </select>


     	<button type="submit" style="color: white;
    background:#967bb6;
    padding: 8px 12px;
    font-size: 20px;
margin-left:80px;

    border: 2px solid white;
    border-radius: 14px;
    cursor: pointer;
">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</div>
<div class="quote">

 <h1  align="left" style="font-size:55px;font-family:Copperplate; margin-top:-80px;"> <bold>CELEBRATE <br> EACH <br>MOMENT</bold></h1>
</div>
</body>
</html>