<php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome Page</title>

<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
   height:100vh; 
  overflow-x: hidden; 
}
  

  .container {
    width: 98vw;
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    height:500px;
    justify-content: space-between;
    align-items: center;
  }

  .left-section {
    flex: 1;
    text-align: left;
    margin-left: 20px;
  }

  .right-section {
    margin-left:10%;
    flex: 1;
    height:500px;
    margin-top: 20px;
    margin-right:10%;
    text-align: right;
  }

  .about-us {
    color: grey;
   
    margin-left: 10px;
  }

  .welcome-text {
    color: black; 
    font-size: 30px;
    margin-bottom: 10px;
  }

  .highlight {
    color:#967bb6;
    font-weight: bold;
  }
h1{
  font-size:50px;
  font-family:'Sriracha', cursive;
}
  
  .video {
    height:550px;
    width:90%;
    margin-left: auto;
    margin-right: auto;
   margin-top:70px;
   border-radius: 10px;
   border-radius: 15px 50px 30px 5px; 
  }
  p{
    font-family:'Sriracha', cursive;
    text-align: justify;
  }
  button{
    font-family:'Sriracha', cursive;
    padding: 10px 20px;
    font-size: 16px;
    background-color:#967bb6;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  iframe{
    margin-bottom: 50px;
    border-radius: 15px 50px 30px 5px; 
  }
  .video-tour{
    background-color: #967bb6;
    width:98vw;
    height:200px;
    padding:20px;
    text-decoration-color:white;
   
    
  }
  #name{
    color:white;
  }
  .heading{
    margin-top: 25px;
    color:white;
  }
  .daddy{
    height:99%;
    width:98%;
  }
  ul {
  list-style-type: none;
    padding: 10px;
padding-right:20px;
  overflow: hidden;
  background-color:white;
  position: -webkit-sticky;
  position: sticky;
  top: 0;
}

li {
  float: right;
margin-right:50px;
}

li a {
  display: block;
  color: #967bb6;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color:lavender ;
  
}
.contact-us{
background-color:#967bb6;
        height:200px;
     padding:30px;
width: 98vw;
  color:white;


}
.instagram-photo{
height:40px;
width:40px;
margin-left:700px;
margin-bottom:50px;
margin-top:-70px;
}
</style>
</head>
<body>
<ul>
<img src="pics/anits.jpeg" style="height:80px; width:80px; margin-left:20px;">
<li><a class="ref" href="signup.php">Register</a></li>
<li><a class="ref" href="index.php">Login</a></li>
<li><a class="ref" href="#t2">Video Tour</a></li>
<li><a class="ref" href="#contact-us">Contact Us</a></li>
</ul>

  <div class="daddy">


  <div class="container">
    <div class="left-section">
      <div class="about-us">ABOUT US</div>
      <h1 class="welcome-text">Welcome to <br><span class="highlight">CURSORS 2K24</span></h1>
      <p>The cursors-2024 is the annual Techfest, the techfest will be on 1st -2nd March -2024.                This platform encourages young talent and showcases their technical excellence.
      The tech fest Cursors 2024 enables
        students to learn latest trends in technologies with many sophisticated events
        like quiz, coding contest,and etc. each compromising a best
        judgement panel from the faculty of the ANITS
        to evaluate the participants work.</p>
       
        
              
      </div>
    <div class="right-section">
      <div class="video" id="t1">
        <iframe width="560" height="315" src="pics/cursors2.mp4" type="video/mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <source src="cursors2.mp4" type="video/mp4">
      </div>
    </div> 
  </div>
  
  <div class="video-tour">
   <center><div class="heading">TAKE A TOUR</div></center>
  
          <h1 align="center" id="name" ><bold>Video Tour on CURSORS 2K24</bold></h1>
          <div class="video1">
            <center><iframe id="t2" width="65%" height="450" src="pics/cursors.mp4" type="video/mp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center> 
            
         </div>
<div class="contact-us" id="contact-us">
<center><p style="font-size:30px; margin-left:500px; margin-top:60px;">Follow us on : </p></center>
<a href="https://www.instagram.com/cursors_2k24?igsh=amJmOWQ3MmRxaTF5" target="_blank">
    <img class="instagram-photo" src="pics/instagram.png">
</a>
</div>

  </div>

</div>
  

  </div>
</body>
</html>
<?php include 'visitcount.php'; ?>
<?php
incrementVisitCount();
?>