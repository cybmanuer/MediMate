<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $id = $_POST["id"];
    $cname = $_POST["cname"];
    $phonenumber = $_POST["phonenumber"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `clinic` (`id`, `cname`, `phonenumber`, `address`, `password`) VALUES ('$id','$cname', '$phonenumber', '$address','$password')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="css/register.css">
    <title>add_clinic</title>
  </head>
  <body>
      
      <?php
    if($showAlert){
    echo "<script>alert('Wow! Clinic Registration Completed.')</script>";
    }
    if($showError){
    echo "<script>alert('Woops! Password not matched.')</script>";
    }
    ?>

     <div class= "container" >
    <div class="title">ADD CLINIC</div>
    <form action="add_clinic.php" method="POST" >
  <div class="user-details">
  <div class="input-box">
     <span class="details">Clinic ID</span>
     <input type="text" placeholder="Enter C_ID" name="id"  required>
  </div>
  <div class="input-box">
     <span class="details">Clinic Name</span>
     <input type="text" placeholder="Enter your Clinic Name" name="cname"  required>
  </div>
<div class="input-box">
     <span class="details">Phone Number</span>
     <input type="text" placeholder="Enter Your number" name="phonenumber"  required>
  </div>
  <div class="input-box">
     <span class="details">Address</span>
     <input type="text" placeholder="Enter Address" name="address"  required>
  </div>
  
  <div class="input-box">
     <span class="details">Password</span>
     <input type="Password" placeholder="Enter your Password" name="password"  required>
  </div>
    <div class="input-box">
     <span class="details">ConfirmPassword</span>
     <input type="Password" placeholder="Confirm your Password" name="cpassword" required >
  </div>
  </div>
 
  <div class="button">
    <input type="submit"  value="ADD CLINIC">
  </div>
<p class="login-register-text">Completed Adding? <a href="adminf.php">Click Here</a>.</p>
    </form>
</div>
  </body>
</html>