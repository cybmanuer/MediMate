<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: admin_login.php");
  exit;
}
?> 



<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet"  href="adminf.css">
	  <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://kit.fontawesome.com/d676f25411.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="adminf.css">


   </head>

<style>
a{

  text-decoration: none;
  color:black;

}

</style>



<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Admin</i></span>

    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
          <a href="add_clinic.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Add Clinic</span>
          </a>
        </li>
        <li>
          <a href="rem_clinic.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Remove Clinic</span>
          </a>
        </li>
        <li>
          <a href="display.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">View Clinic</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Contact Us</span>
          </a>
        </li>
         <li>
          <a href="admin_login.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Logout</span>
          </a>
        </li>
      </ul>
  </div>

<!-- main panel -->
  
  <section class="home-section">
    <nav>
     
      <div class="profile-details">
        <span class="admin_name"></span>

        <i class='bx bx-chevron-down' ><?php echo htmlspecialchars($_SESSION["name"]); ?></a></i>
      </div>

      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i> 
        <a href="admin_login.php"><i class="fa-solid fa-right-from-bracket"></i></a>
      </div>

    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
          <a href="add_clinic.php">
            <div class="box-topic">Add clinics</div></a>
             <div class="indicator">
            </div>
          </div>
         </div>

        <div class="box">
          <div class="right-side">
          <a href="rem_clinic.php">
            <div class="box-topic">Remove clinics</div></a>
            <div class="indicator">
             <!-- <i class='bx bx-up-arrow-alt'></i>-->
            </div>
          </div>
         <!-- <i class='bx bx-cart-alt cart'></i>-->
        </div>

        <div class="box">
          <div class="right-side">
          <a href="display.php">
            <div class="box-topic">View clinic</div></a>
           
            <div class="indicator">
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
 <script src="https://kit.fontawesome.com/e8443f2b60.js" crossorigin="anonymous"></script>

</body>
</html>
