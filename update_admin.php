<?php include('menu.php') ;  ?>
<?php include('header.php') ;  ?>



	

		<!-- Main content -->
		<div class="content-wrapper">

			

			<!-- Content area -->
			<div class="content">
			
								

		   
            <!-- Form inputs -->
				<div class="card-body">
                <h2 class="mb-4">Update Admin</h2>
                <?php
                    //get the id of selected admin
                    $id=$_GET['id'];
                    //create sql query to get the details
                    $update_query = "SELECT * FROM admin WHERE id=$id";
                    $result=mysqli_query($connection, $update_query);
                    if($result==TRUE){
                        //count rows to check whether the data is in database or not
                            $count=mysqli_num_rows($result);
                        
                            //check the num of rows
                            if($count==1)
                            {
                                //echo "Admin Avaliable";
                                $rows=mysqli_fetch_assoc($result);
                                $full_name =$rows['full_name'] ;
                                $user_name =$rows['username'];
                                $email = $rows['email'];
                                $job_title =$rows['job'];
                                
                                }
                                else{
                                    header('location'.SITEURL.'manage_admin.php');
                                }
                            }

        ?>

						<form action="" method="POST">
							<fieldset class="mb-3">
						          <div class="form-group row">
									<label class="col-form-label col-lg-1">Full Name</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" name="full_name" placeholder="Enter your fullname..." value="<?php echo $full_name;  ?>" required>
									</div>
								</div>

                                <div class="form-group row">
									<label class="col-form-label col-lg-1">User Name</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" name="username" placeholder="Enter your username..." value="<?php echo $user_name;  ?>" required>
									</div>
								</div>
                                <div class="form-group row">
									<label class="col-form-label col-lg-1">Email</label>
									<div class="col-lg-10">
										<input type="email" class="form-control" name="email" placeholder="Enter your email..." value="<?php echo $email;  ?>" required>
									</div>
								</div>
                                <div class="form-group row">
									<label class="col-form-label col-lg-1">Job Title</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" name="job" placeholder="Enter your job title..." value="<?php echo $job_title;  ?>" required>
									</div>
								</div>
                                <input type="hidden" name="id" value="<?php echo $id;  ?>">
                                <button type="submit" class="btn btn-primary mb-5" name="submit"> Update </button>
							</fieldset>
                        </form>
        </div>

			</div>
			<!-- /content area -->
            <?php include('footer.php') ;  ?>  
</div>
<?php

//check whether submit button is clicked or not
if(isset($_POST['submit'])){
 //echo "button clicked";
 //get all the values from form
        $id = $_POST['id'];
        $full_name = mysqli_real_escape_string($connection, $_POST['full_name']) ;
         $user_name = mysqli_real_escape_string($connection,  $_POST['username']);
         $email = mysqli_real_escape_string($connection, $_POST['email']) ;
         $job_title = mysqli_real_escape_string($connection, $_POST['job']) ;

         //create a sql query to update admin
         $update_query="UPDATE admin SET
         full_name = '$full_name',
         username = '$user_name',
         email = '$email',
         job = '$job_title'
         WHERE id='$id'
         ";

         $result = mysqli_query($connection, $update_query);
         if($result==TRUE){
             //create a session variable to display message
        $_SESSION['update'] = "<div style='color: #2ed573;'> Admin updated Successfully </div>";
        //redirect page
        echo "<script>window.location.href='manage_admin.php';</script>";
         }
         else{
             //create a session variable to display message
        $_SESSION['update'] = "<div style='color: #ff4757;'> Failed to Update Admin </div>";
        //redirect page
        echo "<script>window.location.href='manage_admin.php';</script>";
         }

}



?>

   
