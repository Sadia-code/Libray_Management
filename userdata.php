<?php

session_start();
// define('SITEURL', 'http://localhost/');
$server = "localhost";
$user = "root";
$password = "";
$db = "lms_nubtk";
$tablename="userdata";

$connection= mysqli_connect('localhost', 'root', '', 'lms_nubtk');

if($connection) {

    echo "<h2 class='text-center'>Submitted</h2>";
    echo "<a href='manage_user.php'> <br/>Click Here to go Back<br/></a>";

} else{
    echo "Error...";
}

mysqli_select_db($connection, 'lms_nubtk');
$id= $_POST['id'];
$name= $_POST['name'];
$father_name= $_POST["father's_name"];
$mother_name= $_POST["mother's_name"];
$department= $_POST['department'];
$dob= $_POST['dob'];
$mail= $_POST['mail'];
$status= $_POST['status'];
$contact= $_POST['contact'];
$img= $_POST['img'];

$query= "insert into userdata () 
value ('$id','$name','$father_name','$mother_name','$department','$dob','$mail','$status','$contact','$img')";

mysqli_query($connection, $query);

?>