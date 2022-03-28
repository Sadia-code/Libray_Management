
<?php include('menu.php') ;  ?>
<?php include('header.php') ;  ?>


<body>



<!-- Main content -->
<div class="content-wrapper">



    <!-- Content area -->
    <div class="content">




        <!-- Form inputs -->

        <section class="my-1">
            <div class="py-1">
                <h2 class="" style="text-shadow: 2px 2px 2px purple">MEMBERSHIP APPLICATION FORM</h2>
            </div>
        </section>
        <form action="userdata.php" method="post">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="id" class="form-control" placeholder="Enter id" name="id">
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="name" class="form-control" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="father's name">Father's Name:</label>
                <input type="father's name" class="form-control" placeholder="Enter father's name" name="father's name">
            </div>
            <div class="form-group">
                <label for="mother's name">Mother's Name:</label>
                <input type="mother's name" class="form-control" placeholder="Enter mother's name" name="mother's name">
            </div>
            <div class="row">
                <div class="col">
                    <label for="department" class="mr-sm-2">Department:</label>
                    <input type="department" class="form-control mb-2 mr-sm-2" placeholder="Enter department name" name="department">
                </div>
                <div class="col">
                    <label for="dob" class="mr-sm-2">DOB:</label>
                    <input type="dob" class="form-control mb-2 mr-sm-2" placeholder="Date of Birth" name="dob">

                </div>
            </div>
            <div class="form-group">
                <label for="mail">Mail:</label>
                <input type="mail" class="form-control" placeholder="eg- john@gmail.com" name="mail">
            </div>
            <div class="row">
                <div class="col">
                    <label for="status" class="mr-sm-2">Status:
                        <select class="form-select form-control mb-2 mr-sm-2" aria-label="Default select example" type="status" name="status">
                            <option value="Student">Student</option>
                            <option value="Core Faculty">Core Faculty</option>
                            <option value="Visiting Faculty">Visiting Faculty</option>
                            <option value="Adjunct Faculty">Adjunct Faculty</option>
                            <option value="Trust Member">Trust Member</option>
                            <option value="Officer">Officer</option>
                            <option value="Teaching Assistant">Teaching Assistant</option>
                            <option value="Research Assistant">Research Assistant</option>
                            <option value="Apprentice">Apprentice</option>
                        </select>
                    </label>
                </div>
                <div class="col">
                    <label for="contact" class="mr-sm-2">Contact no.:</label>
                    <input type="contact" class="form-control mb-2 mr-sm-2" placeholder="Enter valid contact Number" name="contact">
                </div>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Upload Passport Size Photo</label>
                <input class="form-control" type="file" id="formFile" name="img">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" placeholder="Create a Password" name="password">
            </div>
            <!--<div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember me
                </label>
            </div>--!>
            <div class="mb-5">
                <button type="submit" class="btn text-white" style="background-color: purple" name="done">SUBMIT</button>
            </div>
        </form>

    </div>
    <!-- /content area -->
    <?php include('footer.php');?>
</div>

</body>

