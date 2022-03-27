<?php 
include('connection.php');

//get the id of admin to be deleted
$id=$_GET['id'];

//create sql query to delete admin
$delete_query="DELETE FROM admin WHERE id=$id";
$result = mysqli_query($connection, $delete_query);
if($result==TRUE)
{
   //create a session variable to display message
   $_SESSION['delete'] = "<div style='color: #2ed573;'> Admin deleteded Successfully </div>";
   //redirect page
   header("location:".SITEURL.'manage_admin.php');
}
else{
    //create a session variable to display message
    $_SESSION['delete'] = "<div style='color: #ff4757;'> Failed to Delete Admin. </div>";
    //redirect page
    header("location:".SITEURL.'manage_admin.php');
}

//redirect to message admin page





?>