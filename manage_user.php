<?php include('header.php') ;  ?>
<?php include('menu.php') ;  ?>

<body>

	

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Manage User</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Manage User</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">
			
								

		    <a href="add_user.php" type="button" class="btn btn-primary mb-5"><i class="icon-plus3 mr-2"></i> Add User</a>
	                    	


				


				<!-- Dashboard content -->
				<div class="row " >
				<div class="card w-100">


					<table class="table datatable-basic" style="width: 100%; ">
						<thead>
							<tr>
                                <th>ID</th>
								<th>Name</th>
								<th>Father's Name</th>
								<th>Mother's Name</th>
                                <th>Department</th>
								<th>DOB</th>
                                <th>Mail</th>
								<th>Status</th>
                                <th>Contact no</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>

                        <?php

$sql = "SELECT * FROM userdata";
                        $connection =mysqli_connect('localhost', 'root', '', 'lms_nubtk');
                        $result = mysqli_query($connection, $sql);
                        if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
?>
							<tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["name"] ?></td>
                                <td><?php echo $row["father's_name"] ?></td>
                                <td><?php echo $row["mother's_name"] ?></td>
                                <td><?php echo $row["department"] ?></td>
                                <td><?php echo $row["dob"] ?></td>
                                <td><?php echo $row["mail"] ?></td>
                                <td><?php echo $row["status"] ?></td>
                                <td><?php echo $row["contact"] ?></td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button type="button" class="btn btn-success mb-1 ml-4"><i class="icon-pencil5 mr-2"></i>Update</button>
                                                <button type="button" class="btn btn-danger ml-4"><i class="icon-cancel-circle2 mr-2"></i>Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </td>
							</tr>
                            <?php
                            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                        }
                        } else {
                            echo "0 results";
                        }


                        ?>

						</tbody>
					</table>
				</div>
				<!-- /basic datatable -->

                </div>
					


			</div>
			<!-- /content area -->


			
			<?php include('footer.php') ;  ?>
        </div>
</body>
</html>
