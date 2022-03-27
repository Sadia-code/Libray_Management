<?php include('connection.php') ;  ?>
<?php include('header.php') ;  ?>
<body>
<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">

            <!-- Login form -->
            <form class="login-form" action="" method="POST">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                            <h5 class="mb-0">Login to your account</h5>
                            <span class="d-block text-muted">Enter your credentials below</span>
                        </div>

                        <?php  
            if(isset($_SESSION['login'])){
                echo('<br>'.$_SESSION['login'].'<br><br>') ;
                unset($_SESSION['login']);
              }
        ?>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                        <i class="icon-user text-muted form-control-feedback"></i>
                            <input type="text" class="form-control" name="username" placeholder="Username or email">
                            
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                        <i class="icon-lock2 text-muted form-control-feedback"></i>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Sign in <i class="icon-circle-right2 ml-2"></i></button>
                        </div>

                        <div class="text-center">
                            <a href="">Forgot password?</a>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /login form -->

        </div>
        <!-- /content area -->


        

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
<?php  
//submit button clicked or not
if(isset($_POST['submit']))
{
    //process for login
    //get the data from form
    $user_name = mysqli_real_escape_string($connection,  $_POST['username']);
    $password =md5(mysqli_real_escape_string($connection,  $_POST['password'])) ;

    

    //sql to check whether the user with username and password exits or not
    $query= "SELECT * FROM admin WHERE ( username='$user_name' OR email = '$user_name') AND password='$password'";
    $result = mysqli_query($connection, $query);
    //count rows to check whether the user exits or not
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        //user available
         //create a session variable to display message
         $_SESSION['login'] = "<div style='color: #2ed573;'> Login Successful  </div>";
         $_SESSION['user'] =  $user_name;
         //redirect page
         echo "<script>window.location.href='index.php';</script>";
    }
    else
    {
        //user not available
        //create a session variable to display message
        $_SESSION['login'] = "<div class='text_center' style='color: #ff4757;'> Username & Password Did Not Match </div>";
        //redirect page
        echo "<script>window.location.href='login.php';</script>";
    }

}

?>