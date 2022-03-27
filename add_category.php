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
                <h2>Add Category</h2>
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
                                    <label class="col-form-label col-lg-1">Category Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="full_name" placeholder="Enter category name..." required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-1">Status</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="username" placeholder="Enter status..." required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-1">Created On</label>
                                    <div class="col-lg-10">
                                        <input type="email" class="form-control" name="email" placeholder="created on..." required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-1">Updated On</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="job" placeholder="updated on..." required>
                                    </div>
                                </div>
                                <div
                                </tr>
                                <td><?php echo @$row["Category Name"]; ?></td>
                                <td><?php echo @$row["Status"] ?></td>
                                <td><?php echo @$row["Created On"] ?></td>
                                <td><?php echo @$row["Updated On"] ?></td>
                            </tr>
                                
                                </div>                                
                                <button type="submit" class="btn btn-primary mb-5" name="submit"> submit </button>
                            </fieldset>
                        </form>
        </div>
        





            </div>
            <!-- /content area -->
            
            <?php include('footer.php');?>
</div>

</body>