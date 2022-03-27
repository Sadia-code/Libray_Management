<?php

session_start();
// define('SITEURL', 'http://localhost/');
$server = "localhost";
$user = "root";
$password = "";
$db = "lms_nubtk";
$tablename="categorydata";

$connection= mysqli_connect('localhost', 'root', '', 'lms_nubtk');

if($connection) {

    echo "<h2 class='text-center'>Submitted</h2>";
    echo "<a href='manage_category.php'> <br/>Click Here to go Back<br/></a>";

} else{
    echo "Error...";
}

mysqli_select_db($connection, 'lms_nubtk');
$category_name= $_POST['category_name'];
$status= $_POST['status'];
$created_on= $_POST['created_on'];
$updated_on= $_POST['updated_on'];


$query= "insert into categorydata () 
value ('$category_name','$status','$created_on','updated_on')";

mysqli_query($connection, $query);

?>