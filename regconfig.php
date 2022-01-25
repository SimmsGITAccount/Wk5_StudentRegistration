<?php
// Create connection to database
DEFINE ('dbhost','localhost');
DEFINE ('dbuser', 'root');
DEFINE ('dbpass', 'CST499Assignment');
DEFINE ('dbname', 'dbstudents');

$con = mysqli_connect(dbhost, dbuser, dbpass, dbname);

if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
}
?>