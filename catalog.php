<?php
include ('regconfig.php');

$result_crs = mysqli_query($con, "SELECT crsName, crsDesc, crsCount FROM tblcourses");
$rows = mysqli_fetch_assoc($result_crs)
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

<!-- Catalog Header Container -->
<div class="w3-container" id="register" style="padding-bottom:32px;">
    <div class="w3-content" style="max-width:700px">
        <h2 class="w3-center w3-padding-32"><span class="w3-tag w3-wide">Lothlorien University Course Catalog</span></h2>

        <label for="year">Select Year</label>

        <select name="year" id="year">
            <option value = "2022">2022</option>
            <option value = "2023">2023</option>
        </select>

        <label for="semester">Select Year</label>

        <select name="semester" id="semester">
            <option value = "Spring">Spring</option>
            <option value = "Summer">Summer</option>
            <option value = "Fall">Fall</option>
            <option value = "Winter">Winter</option>
        </select>

        <table class = "w3-table w3-striped w3-teal">
            <tr>
                <th>Course Name</th>
                <th>Course Description</th>
                <th>Instructor</th>
                <th>Spots Available</th>
                <th>Spots Remaining</th>
            </tr>

            <tr class="w3-text-black">
                <td><?php echo $rows['crsName']; ?></td>
                <td><?php echo $rows['crsDesc']; ?></td>
                <td>Gris Bellwood</td>
                <td><?php echo $rows['crsCount']; ?></td>
                <td>20</td>
                <td><button class="w3-button w3-dark-grey" type="submit" id="add" name="add">Enroll in Course</td>
                <?php
                if (isset($_POST['add'])) {
                    $_SESSION['selectedCourse'] = test_input($_POST["course"]);
                    getOfferingId($con,$_SESSION['selectedCourse'],$_SESSION['selectedYear'],$_SESSION['selectedSemester']);
                    checkIfRegistered($con,$_SESSION['studentId'],$_SESSION['selectedCourse']);
                    if ($_SESSION['registered'] == 1) {
                        echo "<p style='padding-top:15px'>You are already registered for this course.  Please make another selection.</p>";
                    } else if ($_SESSION['registered'] == 0) {
                        numStudentsEnrolled($con,$_SESSION['selectedCourseID']);
                        maxStudentsForCourse($con,$_SESSION['selectedCourseID']);
                        if ($_SESSION['numStudentsEnrolled'] < $_SESSION['maxStudents']) {
                            registerForCourse($con,$_SESSION['studentId'],$_SESSION['selectedCourseID']);
                            echo "<p style='padding-top:15px'>You have successfully registered for ".$_SESSION['selectedCourse']." for ".$_SESSION['selectedSemester']." ".$_SESSION['selectedYear'].".</p>";
                        } else if ($_SESSION['numStudentsEnrolled'] == $_SESSION['maxStudents']) {
                            checkIfWaitlisted($con,$_SESSION['studentId'],$_SESSION['selectedCourseID']);
                            if ($_SESSION['waitlisted'] == 1) {
                                echo "<p style='padding-top:15px'>You are already on the waitlist for ".$_SESSION['selectedCourse']." for ".$_SESSION['selectedSemester']." ".$_SESSION['selectedYear'].".  Please make another selection.</p>";
                            } else {
                                addToWaitlist($con,$_SESSION['studentId'],$_SESSION['selectedCourseID']);
                                echo "<p style='padding-top:15px'>Course is full.  You have been successfully added to the waitlist for ".$_SESSION['selectedCourse']." for ".$_SESSION['selectedSemester']." ".$_SESSION['selectedYear'].".</p>";
                            }
                        }
                    }
                }
                ?>
            </tr>
        </table>
    </div>
</div>

<table class="w3-table w3-padding-24">
    <td><a href="/SchoolReg/mainpage.php"><button class="w3-button w3-teal" type="submit" id="profile" name="enrollment">Return to Profile</a></button></td>
    <td><a href="/SchoolReg/logout.php"><button class="w3-button w3-teal" type="submit" id="logout" name="logout">Logout</a></button></td>
</table>

</body>
</html>