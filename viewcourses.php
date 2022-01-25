<?php
session_start();
include ('regconfig.php');

If($_SESSION["status"] != true){
    header("Location:/SchoolReg/login.php");
}

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
        <a href="/SchoolPage/index.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
        <a href="/SchoolPage/index.php#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Leadership</a>
        <a href="/SchoolPage/index.php#academics" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Academics</a>
        <a href="/SchoolPage/index.php#campuslife" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Campus Life</a>
        <a href="/SchoolPage/index.php#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact Us</a>
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-button" title="Notifications">Students <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                <a href="#" class="w3-bar-item w3-button">Registration</a>
                <a href="#" class="w3-bar-item w3-button">Course Catalog</a>
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
        <h2 class="w3-center w3-padding-32"><span class="w3-tag w3-wide">Class Schedule</span></h2>
        <p class="w3-center w3-padding-24"><b>Here is your current enrollment schedule.</b></p>

        <?php
            if(isset($_SESSION['email'])) {

                displayCourseSchedule($con,$_SESSION['studentID']);
        }
        ?>
       <table class = "w3-table w3-striped w3-teal">
            <tr>
                <th>Course Name</th>
                <th>Course Semester</th>
                <th>Course Year</th>
            </tr>

            <tr class="w3-text-black">
                <td>CST301: Computer Software Technology & Design</td>
                <td>Spring</td>
                <td>2022</td>
                <td><button class="w3-button w3-dark-grey" type="submit" id="drop" name="drop">Drop Course</a></button></td>
            </tr>

           <tr class="w3-text-white">
               <td>CYB101: Defensive Network Reconnaissance</td>
               <td>Spring</td>
               <td>2022</td>
               <td><button class="w3-button w3-dark-grey" type="submit" id="drop" name="drop">Drop Course</a></button></td>
           </tr>

           <tr class="w3-text-black">
               <td>ART101: Art Appreciation</td>
               <td>Spring</td>
               <td>2022</td>
               <td><button class="w3-button w3-dark-grey" type="submit" id="drop" name="drop">Drop Waitlist</a></button></td>
           </tr>
        </table>

        <table class="w3-table w3-padding-24">
            <td><a href="/SchoolReg/mainpage.php"><button class="w3-button w3-teal" type="submit" id="profile" name="enrollment">Return to Profile</a></button></td>
            <td><a href="/SchoolReg/catalog.php"><button class="w3-button w3-teal" type="submit" id="search" name="search">Search Course Catalog</a></button></td>
            <td><a href="/SchoolReg/logout.php"><button class="w3-button w3-teal" type="submit" id="logout" name="logout">Logout</a></button></td>
        </table>

</body>
</html>

<?php

function displayCourseSchedule($con,$studentId)
{
    $getScheduleQuery = "SELECT tblenrollment.enrStudentID, tblavailable.avCourseID, tblCourses.crsName, tblAvailable.avYear, tblAvailable.avSemester
            FROM ((tblEnrollment
                INNER JOIN tblAvailable ON tblEnrollment.enrCourseID = tblAvailable.avCourseID
                    AND tblEnrollment.enrStudentID = $studentId)
                INNER JOIN tblCourses ON tblCourses.crsID = tblAvailable.avCourseID)";
    $results = mysqli_query($con, $getScheduleQuery);
    if (mysqli_num_rows($results) != 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            $courseID = $row['avCourseID'];
            $courseName = $row['crsName'];
            $courseYear = $row['avYear'];
            $courseSemester = $row['avSemester'];

            return $courseName;
        }
    }
}
function maxStudentsForCourse($con,$CourseID) {
    $maxStudentsQuery =  "SELECT tblCourses.crsCount
            FROM tblCourses
            INNER JOIN tblAvailable ON tblAvailable.avCourseID = tblCourses.crsID
                AND tblAvailable.avCourseID = $CourseID";
    $results = mysqli_query($con, $maxStudentsQuery);
    if (mysqli_num_rows($results) == 1) {
        while($row = mysqli_fetch_assoc($results)) {
            $_SESSION['maxStudents'] = $row['maxStudents'];
        };
    };
};

function numOnWaitlist($con,$CourseID) {
    $numWaitlistQuery =  "SELECT COUNT(*) as tblStudents
            FROM tblWaitlist
            WHERE avCourseID = $CourseID";
    $results = mysqli_query($con, $numWaitlistQuery);
    if (mysqli_num_rows($results) == 1) {
        while($row = mysqli_fetch_assoc($results)) {
            $_SESSION['numOnWaitlist'] = $row['tblStudents'];
        };
    };
};

function getWaitlistedStudent($con,$CourseID) {
    $waitStudentQuery =  "SELECT wtStudentID, wtDateAdded
            FROM tblWaitlist
            WHERE avCourseID = $CourseID
            ORDER BY wtDateAdded LIMIT 1";
    $results = mysqli_query($con, $waitStudentQuery);
    if (mysqli_num_rows($results) == 1) {
        while($row = mysqli_fetch_assoc($results)) {
            $_SESSION['waitlistStudentId'] = $row['wtStudentID'];
            $_SESSION['dteAdded'] = $row['wtDateAdded'];
        };
    };
};

function registerForCourse($con,$studentID,$CourseID) {
    $registerQuery =  "INSERT INTO tblEnrollment (enrStudentID, avCourseID)
            VALUES 
                ($studentId,$CourseID)";
    $results = mysqli_query($con, $registerQuery);
}

function removeStudentFromWaitlist($con,$studentId,$CourseID,$dteAdded) {
    $removeFromWaitlistQuery =  "DELETE FROM tblWaitlist 
            WHERE wtStudentID = $studentId
                AND avCourseID = $CourseID
                AND dteAdded = '$wtDateAdded'";
    $results = mysqli_query($con, $removeFromWaitlistQuery);
};
?>



