<?php

function CreateDB(){
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="lms_nubtk";

    //create connection
    $con=mysqli_connect($servername,$username,$password);

    //check connection
    if(!$con){
        die("Connection Failed:" .mysqli_connect_error());
    }

    //create Database
    $sql="CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($con,$sql)){
        $con=mysqli_connect($servername,$username,$password,$dbname);


        //sql to create new table
            $sql="CREATE TABLE IF NOT EXISTS USER_INFO
                  (Serial_no INT(225) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                   id INT(225) NOT NULL UNIQUE,
                   User_name VARCHAR(225) NOT NULL,
                   Father_name VARCHAR(225) NOT NULL,
                   Mother_name VARCHAR(225) NOT NULL,
                   Status VARCHAR(225) NOT NULL,
                   Department VARCHAR(225) NOT NULL,
                   mail VARCHAR(225) NOT NULL,
                   Date_of_birth VARCHAR(225) NOT NULL,
                   Address VARCHAR(225) NOT NULL, 
                   Contact_no VARCHAR(225) NOT NULL, 
                   )";

        if(mysqli_query($con, $sql)){
            return $con;
        }else{
            echo "Cannot Create Table...!";
        }

    }else{
        echo "Error while creating Database" .mysqli_error($con);
    }

}