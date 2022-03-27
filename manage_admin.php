<?php include('menu.php') ;  ?>
<?php include('header.php') ;  ?>




<body>

	

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Manage Admin</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Manage Admin</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">
			
								
           <a href="add_admin.php">
		    <button type="button" class="btn btn-primary mb-5"><i class="icon-plus3 mr-2"></i> Add Admin</button>
	                    	
</a>

<?php
           //checking the seesion
           if(isset($_SESSION['add'])){
             echo('<br>'.$_SESSION['add'].'<br><br>') ;
             unset($_SESSION['add']);
           }
		   if(isset($_SESSION['delete'])){
            echo('<br>'.$_SESSION['delete'].'<br><br>') ;
            unset($_SESSION['delete']);
           }
           ?>

				


				<!-- Dashboard content -->
				<div class="row " >
				<div class="card w-100">
					

					<table class="table datatable-basic" style="width: 100%; ">
						<thead>
							<tr>
							<th>Serial No</th>
								<th>Full Name</th>
								<th>User Name</th>
								<th>Email</th>
								<th>Job Title</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<?php 
        //query to get all admin
        $query = "SELECT * FROM admin";
        //execute the query
        $result=mysqli_query($connection, $query);
        
        if($result==TRUE)
        {
          //count rows to check whether the data is in database or not
          $count=mysqli_num_rows($result);
          $serial_no=1;//create a variable and assign the value
          //check the num of rows
          if($count>0)
          {
            while($rows=mysqli_fetch_assoc($result))
            {
              //using while loop to get all data from database
              //get individual data
              $id=$rows['id'];
              $full_name =$rows['full_name'] ;
              $user_name =$rows['username'];
			  $email=$rows['email'];
			  $job_title=$rows['job'];
            
              //display values in our table
              ?>
              <tbody>
                    <tr>
                      <th scope="row"><?php echo $serial_no++ ?>.</th>
                      <td><?php echo $full_name ?></td>
                      <td><?php echo $user_name ?></td>
					  <td><?php echo $email ?></td>
					  <td><?php echo $job_title ?></td>
                      <td class="text-center">
								<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
											<button type="button" class="btn btn-success mb-1 ml-4"><i class="icon-pencil5 mr-2"></i>Update</button>
											<a href="<?php echo SITEURL  ?>delete_admin.php?id=<?php echo $id;  ?>"><button type='button' class='btn btn-danger ml-4'><i class='icon-cancel-circle2 mr-2'></i>Delete</button></a>
											</div>
										</div>
									</div>
								</td>
                    </tr>
    
              </tbody>
              <?php
            }

          } 
          else{

          }

        }

        ?>
  
  <tbody>
							

 
							
							
						</tbody>
					</table>
				</div>
				<!-- /basic datatable -->

					</div>
					


			</div>
			<!-- /content area -->


			
			<?php include('footer.php') ;  ?>
</body>
</html>
