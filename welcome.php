<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="user_front.css">
    <title>user_front</title>

    <title>Welcome - <?php $_SESSION['username']?></title>
  </head>
  <body>
  
   <div class="menu-bar"><ul class="nav-area">
<li><a href="home.php">Home</a></li>
<li><a href="#">About us</a></li>
<li><a href="login.php">Log Out</a></li>
<li><a href="feedback.php">Feedback</a></li>
</ul>

      <h1>Diagnosis And Test Management System</h1>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2 allign center>WELCOME- <?php echo $_SESSION['username']?> </h2>
  <br>
  <br>
  <br>
  <br>
  <br>

<div class="info"><p>Online diagnosis Appointment system is the system where the users can search the clinics that the needed for and also can take appointment. This system will make easy for the clinics and patients to see their list of clinics and their patients. Find & book appointments with  diagnostic tests, clinics.Users can even give their feedback to the system administration. Admin can manage clinics, tests.</p></div>



  <div class="main">
  <div class="cards">
         <div class="image">
         <img src="http://www.flexibleproduction.com/wp-content/uploads/2017/06/test-intelligenza-sociale.jpg">
         </div>

          <div class="title">
            <h2> <a href="book.php" >Book Test </a>
           </h2>
           </div>
  </div>


<div class="cards">
         <div class="image">
         <img src="https://www.chirayuhospital.org/images/hp.png">
         </div>

          <div class="title">
           <h2><a href="display.php" >View Clinics </a></h2>
           </div>
  </div>

<div class="cards">
         <div class="image">
         <img src="https://i2.wp.com/www.additudemag.com/wp-content/uploads/2006/12/GettyImages-1129223269.jpg?resize=1280%2C720px&ssl=1">
         </div>

          <div class="title">
           <h2><a href="reports.php" >REPORTS</h2>
           </div>
  </div>

  <div class="cards">
         <div class="image">
         <img src="https://images.everydayhealth.com/images/cancer/leukemia/cancer-diagnosis-and-tests-722x406.jpg">
         </div>

          <div class="title">
           <h2><a href="display_test.php" >View Tests</h2>
           </div>
  </div>
 </div>
  </body>
</html>