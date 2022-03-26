<?php

session_start();
   // define('SITEURL', 'http://localhost/');
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "lms_nubtk";

    $connection = mysqli_connect($server, $user, $password,$db);

   if($connection){
       echo "connection successful";
   }




?>