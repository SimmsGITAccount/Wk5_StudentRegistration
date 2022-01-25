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
        <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
        <a href="#leadership" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Leadership</a>
        <a href="#academics" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Academics</a>
        <a href="#campuslife" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Campus Life</a>
        <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact Us</a>
        <div class="w3-dropdown-hover w3-hide-small">
            <button class="w3-button" title="Notifications">Students <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                <a href="/SchoolReg/registration.php" class="w3-bar-item w3-button">Registration</a>
                <a href="/SchoolReg/login.php" class="w3-bar-item w3-button">Log In</a>
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

<!-- Leadership Container -->
<div class="w3-container w3-padding-64 w3-center" id="leadership">
    <h2>Leadership</h2>

    <div class="w3-row"><br>

        <div class="w3-quarter">
            <img src="/SchoolReg/photos/UniversityPresident.jpg" alt="PresidentLana" width="175" height="200" style="width:45%" class="w3-circle w3-hover-opacity">
            <h3>President Lana Galadriel</h3>
            <p>Lothlorien University's fourth president.</p>
        </div>

        <div class="w3-quarter">
            <img src="/SchoolReg/photos/UniversityProvost.jpg" alt="ProvostMoses" width="175" height="200" class="w3-circle w3-hover-opacity">
            <h3>Provost Moses Celeborn</h3>
            <p>Lothlorien University's second provost.</p>
        </div>

        <div class="w3-quarter">
            <img src="/SchoolReg/photos/AdminTeam.jpg" alt="Administration" width="175" height="200" style="width:45%" class="w3-circle w3-hover-opacity">
            <h3>Other Administration</h3>
            <p>The University is governed by a Board of Trustees and Faculty Senate and supported by numerous offices.</p>
        </div>

    </div>
</div>

<!-- Academics Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="academics">

    <div class="w3-quarter">
        <h2>Academics</h2>
        <p>Students at Lothlorien University are encouraged to explore, create, and apply knowledge.  We encourage venturing into unknown fields of knowledge and perhaps discovering new passions.
        The faculty are here to help provide guidance and a diverse perspective.</p>
    </div>

    <div class="w3-quarter">
        <div class="w3-card w3-white">
            <img src="/SchoolReg/photos/StudentsMain.jpg" alt="Students" style="width:100%">
            <div class="w3-container">
                <h3>University Information</h3>
                <p><b>Faculty Members:</b> 2,224</p>
                <p><b>Students:</b> 16,416</p>
                <p><b>Student-to-faculty ratio:</b> 4:1</p>
                <p><b>Fields of Study:</b> Nearly 200</p>
            </div>
        </div>
    </div>

    <div class="w3-quarter">
        <div class="w3-card w3-white">
            <img src="/SchoolReg/photos/UndergraduateMain.jpg" alt="Undergrad" style="width:100%">
            <div class="w3-container">
                <h3>Undergraduate Studies</h3>
                <p>More than 40 major fields of undergraduate study. <a href="/SchoolReg/comingsoon.php">Explore Majors</a></p>
                <p>Approximately 10,000 undergraduate students at Lothlorien University.</p>
                <p>Undergraduate complete at least 180 units, including major courses.</p>
                <p>Lothlorien University offers three undergraduate programs: Bachelor of Arts, Bachelor of Science, and Bachelor of Arts and Sciences.</p>
            </div>
        </div>
    </div>

    <div class="w3-quarter">
        <div class="w3-card w3-white">
            <img src="/SchoolReg/photos/GraduateMain.jpg" alt="Graduate" style="width:100%">
            <div class="w3-container">
                <h3>Graduate Studies</h3>
                <p>More than 20 major fields of postbaccalaureate study. <a href="/SchoolReg/comingsoon.php">Explore Majors</a> </p>
                <p>Approximately 6,000 graduate students at Lothlorien University.</p>
                <p>Five different schools to pursue your passions: Medicine, Law, Engineering, Business, and Humanities.</p>
            </div>
        </div>
    </div>

</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
    <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
       style="position:absolute;top:-28px;right:24px">+</a>
</div>

<!-- Campus Life Row -->
<div class="w3-row-padding w3-center w3-padding-64" padding-left="50px" id="campuslife">
    <h2>Campus Life</h2>
    <p>Come be part of a thriving community of creative and accomplished people from around the world.</p><br>
    <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-hover-shadow">
            <li class="w3-theme">
                <p class="w3-xlarge">Campus Information</p>
            </li>
            <li class="w3-padding-16"><b>40</b> Student Residences</li>
            <li class="w3-padding-16"><b>400+</b> Organized Student Groups</li>
            <li class="w3-padding-16"><b>10,000+</b> Students Living on Campus</li>
            <li class="w3-padding-16">
                <h2 class="w3-wide">Student Life</h2>
                <span class="w3-opacity">Student Affairs</span><br>
                <span class="w3-opacity">Housing and Dining</span><br>
                <span class="w3-opacity">Community Engagement and Diversity</span>
            </li>
            <li class="w3-theme-l5 w3-padding-24">
                <button class="w3-button w3-teal w3-padding-large"> Learn More</button>
            </li>
        </ul>
    </div>

    <div class="w3-half w3-padding-64">
        <img src="/SchoolReg/photos/CampusLife.jpg" alt="campus" width="200" height="200" style="width:100%;min-height:350px;max-height:600px;">
    </div>


</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
    <div class="w3-row">
        <div class="w3-col m5">
            <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
            <p>Request additional information regarding our campus, programs, and admission.</p>
            <h3>Address</h3>
            <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Hithaeglir</p>
            <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
            <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  admin@lothlorien.edu</p>
        </div>
        <div class="w3-col m7">
            <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/SchoolReg/comingsoon.php" target="_blank">
                <div class="w3-section">
                    <label>Name</label>
                    <input class="w3-input" type="text" name="Name" required>
                </div>
                <div class="w3-section">
                    <label>Email</label>
                    <input class="w3-input" type="text" name="Email" required>
                </div>
                <div class="w3-section">
                    <label>Message</label>
                    <input class="w3-input" type="text" name="Message" required>
                </div>
                <input class="w3-check" type="checkbox" checked name="Like">
                <label>Yes, please send me more information!</label>
                <button type="submit" class="w3-button w3-right w3-theme">Send</button>
            </form>
        </div>
    </div>
</div>

<!-- Image of location/map -->
<img src="/SchoolReg/photos/UniversityAerial.jpg" class="w3-image w3-greyscale-min" style="width:100%;">

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
    <h4>Follow Us</h4>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
    <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
    <p>Lothlorien University Copyright @ 2022</p>

    <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
        <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>
        <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
    </div>
</footer>

<script>
    // Script for side navigation
    function w3_open() {
        var x = document.getElementById("mySidebar");
        x.style.width = "300px";
        x.style.paddingTop = "10%";
        x.style.display = "block";
    }

    // Close side navigation
    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }

    // Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>

</body>
</html>
