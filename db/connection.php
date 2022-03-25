<?php
require_once('db/CreateDB.php');


$con = mysqli_connect("localhost", "root", "", "lms_nubtk");
if (mysqli_connect_error()) {
    echo "<script>alert('Cannot Connect to the Database');</script>";
    exit();
}

?>


