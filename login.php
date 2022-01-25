<?php
session_start();
include('regconfig.php');

if(isset($_POST['login'])) {
    $username = mysqli_real_escape_string($con, $_POST['email']);
    $upassword = mysqli_real_escape_string($con, $_POST['password']);

    $_SESSION["status"] = false;

    if ($username != "" && $upassword != "") {
        $sql_query = "SELECT * FROM tblStudents WHERE stEmail ='" . $username . "'and stPass='" . $upassword . "'";
        $result = mysqli_query($con, $sql_query);

        if (mysqli_num_rows($result) == 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION["status"] = true;
                $_SESSION['email'] = $username;
                $_SESSION['studentID'] = $row['stID'];
                $_SESSION['stpassword'] = $row['stPass'];
                $_SESSION['stFirst'] = $row['stFirstName'];
                $_SESSION['stLast'] = $row['stLastName'];
                $_SESSION['stSSN'] = $row['stSSN'];
            }
            header('Location: /SchoolReg/mainpage.php');
        } else {
            echo '<script>alert("Invalid email or password. Please try again.")</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<title>Lothlorien University</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
        <a href="/SchoolReg/index.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
        <a href="/SchoolReg/index.php#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Leadership</a>
        <a href="/SchoolReg/index.php#academics" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Academics</a>
        <a href="/SchoolReg/index.php#campuslife" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Campus Life</a>
        <a href="/SchoolReg/index.php#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact Us</a>
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-button" title="Notifications">Students <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                <a href="#" class="w3-bar-item w3-button">Registration</a>
                <a href="#" class="w3-bar-item w3-button">Log In</a>
            </div>
        </div>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
        <a href="#team" class="w3-bar-item w3-button">Leadership</a>
        <a href="#academics" class="w3-bar-item w3-button">Academics</a>
        <a href="#campuslife" class="w3-bar-item w3-button">Campus Life</a>
        <a href="#contact" class="w3-bar-item w3-button">Students</a>
        <a href="#" class="w3-bar-item w3-button">Search</a>
    </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
    <img src="/SchoolReg/photos/LothlorienMain.jpg" alt="campus" style="width:100%;min-height:350px;max-height:600px;">
    <div class="w3-container w3-display-bottomleft w3-margin-bottom">
        <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="UniversityPhoto">Lothlorien University Campus</button>
    </div>
</div>

<!-- Picture Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
        <header class="w3-container w3-teal w3-display-container">
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
            <h4>Lothlorien University</h4>
            <h5>A place for discovery, innovation, learning, and discourse. </h5>
        </header>
        <div class="w3-container">
            <p>Lothlorien opened in 1824 and is currently located near the lower Misty Mountains.</p>
            <p>Go to the <a class="w3-text-teal" href="/SchoolReg/contact.php">About Us</a> section to learn more!</p>
        </div>
        <footer class="w3-container w3-teal">
            <p>Picture of Campus in Spring</p>
        </footer>
    </div>
</div>

<!-- Login Header Container -->
<div class="w3-container" id="login" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
  <h1 class="w3-center w3-padding-32"><span class="w3-tag w3-wide">Student Portal Login</span></h1>
  <p class="w3-center w3-padding-24">Please enter your school email and password to access the Lothlorien University Student Portal.</p>

<!-- Login Form -->
<form method="post">
    <p><input class="w3-input w3-padding-16 w3-border" type="email" placeholder = "Email Address" name="email" required></p>
    <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder = "Password" required name="password"></p> 
    <p><button class="w3-button w3-black" type="submit" id="login" name="login">Login</p>
    <p><button class="w3-button w3-margin-left w3-black" type="reset" id="reset" name="reset">Reset</p>
  </div> 
    <div class="w3-content" style="max-width:700px">
      <p class="w3-left w3-padding-24"p> Don't have an account? <a href="/SchoolReg/registration.php">Register here</a></p>
    </div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-large">
  <p>Lothlorien University Copyright @ 2022</p>
</footer>

</body>
</html>