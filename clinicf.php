<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" type="text/css" href="clinicf.css">
	<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">CLINIC</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
          <a href="add_test.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Add Test</span>
          </a>
        </li>
        <li>
          <a href="rem_test.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Remove Test</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Add report</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">contact us</span>
          </a>
        </li>
         <li>
          <a href="login.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">logout</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Clinic</span>
      </div>
     <!-- <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>-->
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name"></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Add Tests</div>
             <div class="indicator">
            </div>
          </div>
         </div>
        <div class="box">
          <div class="right-side">
            <a href="display_test.php">
            <div class="box-topic" a href="display_test.php">Display Test</div>
            <div class="indicator">
             <!-- <i class='bx bx-up-arrow-alt'></i>-->
            </div>
          </div>
         <!-- <i class='bx bx-up-arrow-alt'></i>-->
        
           
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

</body>
</html>