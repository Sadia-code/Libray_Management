<?php include('connection.php') ; ?>
<?php include('header.php') ;  ?>
<?php include('menu.php') ;  ?>

<body>

	

		<!-- Main content -->
		<div class="content-wrapper">

			

			<!-- Content area -->
			<div class="content">
			
								

		   
            <!-- Form inputs -->
				<div class="card-body">
                <h2>Add Admin</h2>
<?php
           //checking the seesion
           if(isset($_SESSION['add'])){
             echo('<br>'.$_SESSION['add'].'<br><br>') ;
             unset($_SESSION['add']);
           }
?>
						<form action="" method="POST">
							<fieldset class="mb-3">
						          <div class="form-group row">
									<label class="col-form-label col-lg-1">Full Name</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" name="full_name" placeholder="Enter your fullname..." required>
									</div>
								</div>

                                <div class="form-group row">
									<label class="col-form-label col-lg-1">User Name</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" name="username" placeholder="Enter your username..." required>
									</div>
								</div>
                                <div class="form-group row">
									<label class="col-form-label col-lg-1">Email</label>
									<div class="col-lg-10">
										<input type="email" class="form-control" name="email" placeholder="Enter your email..." required>
									</div>
								</div>
                                <div class="form-group row">
									<label class="col-form-label col-lg-1">Job Title</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" name="job" placeholder="Enter your job title..." required>
									</div>
								</div>
                                <div class="form-group row">
									<label class="col-form-label col-lg-1">Password</label>
									<div class="col-lg-10">
										<input type="password" class="form-control" name="password" placeholder="Enter your password..." required>
									</div>
								</div>
                                <button type="submit" class="btn btn-primary mb-5" name="submit"> Add </button>
							</fieldset>
                        </form>
        </div>

			</div>
			<!-- /content area -->
            <?php include('footer.php');?>
</div>

</body>       
<?php

//process the value from form and save it in database

// check whether the submit button is clicked or not

if(isset($_POST['submit']))
{
   //get the data from form
   $full_name = mysqli_real_escape_string($connection, $_POST['full_name']) ;
   $user_name = mysqli_real_escape_string($connection,  $_POST['username']);
   $email = mysqli_real_escape_string($connection, $_POST['email']) ;
   $job_title = mysqli_real_escape_string($connection, $_POST['job']) ;
   $password =md5(mysqli_real_escape_string($connection,  $_POST['password'])) ;

   //SQL query to save tha data into database
   $insertquery = "insert into admin( full_name, username, email, job, password) values( '$full_name', '$user_name', '$email', '$job_title', '$password')";

   //execute query and save data in database
   $query = mysqli_query($connection, $insertquery);

   if($query==TRUE)
   {
       //create a session variable to display message
       $_SESSION['add'] = "<div style='color: #2ed573;'> Admin Added Successfully </div>";
       //redirect page
       //header("location:".SITEURL.'manage_admin.php');
       echo "<script>window.location.href='manage_admin.php';</script>";
       
      
   }
   else
   {
       //create a session variable to display message
       $_SESSION['add'] = "<div style='color: #ff4757;'> Failed to Add Admin </div>";
       //redirect page
       header("location:".SITEURL.'add_admin.php');
   }
}
?>