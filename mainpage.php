<?php
session_start();
include ('regconfig.php');

If($_SESSION["status"] != true){
    header("Location:/SchoolReg/login.php");
}
$result = mysqli_query($con, "SELECT * FROM tblstudents WHERE stEmail='" .$_SESSION['email']. "'");
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<title>Lothlorien University Student Portal</title>
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
</div>

<!-- Profile Header Container -->
<div class="w3-container" id="register" style="padding-bottom:32px;">
    <div class="w3-content" style="max-width:700px">
        <p class="w3-center w3-padding-24"><b>Hello <?php echo $row['stFirstName']?>. Here is the current information we have on record for you.</b></p>
        <h2 class="w3-center w3-padding-32"><span class="w3-tag w3-wide">Profile Information</span></h2>

        <table class = "w3-table w3-striped w3-dark-grey">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Street Name</th>
                <th>City</th>
                <th>State</th>
                <th>Zip</th>
                <th>Phone</th>
            </tr>

            <tr class="w3-text-black">
                <td><?php echo $row['stFirstName']; ?></td>
                <td><?php echo $row['stLastName']; ?></td>
                <td><?php echo $row['stEmail']; ?></td>
                <td><?php echo $row['stStreetNum']; ?></td>
                <td><?php echo $row['stStreetName']; ?></td>
                <td><?php echo $row['stCity']; ?></td>
                <td><?php echo $row['stState']; ?></td>
                <td><?php echo $row['stZip']; ?></td>
                <td><?php echo $row['stPhone']; ?></td>
            </tr>
        </table>

        <table class="w3-table w3-padding-24">
            <td><a href="/SchoolReg/viewcourses.php"><button class="w3-button w3-teal" type="submit" id="crsenroll" name="enrollment">View Enrolled Courses</a></button></td>
            <td><a href="/SchoolReg/catalog.php"><button class="w3-button w3-teal" type="submit" id="search" name="search">Search Course Catalog</a></button></td>
            <td><a href="/SchoolReg/logout.php"><button class="w3-button w3-teal" type="submit" id="logout" name="logout">Logout</a></button></td>
        </table>


</body>
</html>
