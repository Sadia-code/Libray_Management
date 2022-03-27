<?php  
//authorization - access control
//check whether the user is logged in or not
if(!isset($_SESSION['user']))
{
    //create a session variable to display message
    $_SESSION['no_login_message'] = "<div class='text-center' style='color: #ff4757;'> Please Login To Access Admin Panel </div>";
    //redirect page
    header("location:".SITEURL.'login.php');
}


?>