<?php

?>

<!doctype html>
<html lang="en">.
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova:ital@1&display=swap" rel="stylesheet">

</head>
<body>
<section>
    <div class="py-1">
        <h1 class="text-center" style="text-shadow: 2px 2px 2px purple">LIBRARY AND INFORMATION DEPARTMENT</h1>
    </div>
</section>
<section class="my-1">
    <div class="py-1">
        <h2 class="text-center" style="text-shadow: 2px 2px 2px purple">MEMBERSHIP APPLICATION FORM</h2>
    </div>
</section>

<div class="w-50 m-auto" style="text-shadow: 1px 1px 1px purple">
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
                        <option selected>Choose Status</option>
                        <option value="1">Student</option>
                        <option value="2">Core Faculty</option>
                        <option value="3">Visiting Faculty</option>
                        <option value="4">Adjunct Faculty</option>
                        <option value="5">Trust Member</option>
                        <option value="6">Officer</option>
                        <option value="7">Teaching Assistant</option>
                        <option value="8">Research Assistant</option>
                        <option value="9">Apprentice</option>
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
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
            </label>
        </div>
        <div class="mb-5">
            <button type="submit" class="btn text-white" style="background-color: purple" name="done">SUBMIT</button>
        </div>
    </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

