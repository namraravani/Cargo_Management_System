<?php
    session_start();
    $userprofile = $_SESSION['username'];
    if($userprofile==true){

    }
    else{
        echo "<script>alert('Please Login First!!!');</script>";
        echo "<script>location.href='login_page.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Enquiry</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="add_style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <form action="add_enquiry.php" method="post">
                <h4 class="display-4 text-center">ADD</h4><hr><br>
                <div class="form-group">
                    <label for="enquiry_id">ID</label>
                    <input type="number" class="form-control" name="enquiry_id" id="enquiry_id" placeholder="Enter Enquiry ID">
                </div>
                <div class="form-group">
                    <label for="enquiry_type">Type</label>
                    <input type="text" class="form-control" name="enquiry_type" id="enquiry_type" placeholder="Enter Enquiry Type">
                </div>
                <div class="form-group">
                    <label for="enquiry_description">Description</label>
                    <input type="text" class="form-control" name="enquiry_description" id="enquiry_description" placeholder="Enter Enquiry Description">
                </div>
                <div class="form-group">
                    <label for="enquiry_title">Title</label>
                    <input type="text" class="form-control" name="enquiry_title" id="enquiry_title" placeholder="Enter Enquiry Title">
                </div>
                <div class="form-group">
                    <label for="enquiry_date">Date</label>
                    <input type="date" class="form-control" name="enquiry_date" id="enquiry_date" placeholder="Enter Enquiry Date">
                </div>
                <button type="submit" name="add" class="btn btn-primary">Add</button>
            </form>
        </div>
    </body>
</html>