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
        <title>Add User</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="add_style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <form action="add_user.php" method="post">
                <h4 class="display-4 text-center">ADD</h4><hr><br>
                <div class="form-group">
                    <label for="user_id">ID</label>
                    <input type="number" class="form-control" name="user_id" id="user_id" placeholder="Enter User id">
                </div>
                <div class="form-group">
                    <label for="user_role_id">Role ID</label>
                    <input type="number" class="form-control" name="user_role_id" id="user_role_id" placeholder="Enter Role ID">
                </div>
                <div class="form-group">
                    <label for="user_name">Name</label>
                    <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter User name">
                </div>
                <div class="form-group">
                    <label for="user_email">Email</label>
                    <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Enter User Email">
                </div>
                <div class="form-group">
                    <label for="user_dob">Birthdate</label>
                    <input type="date" class="form-control" name="user_dob" id="user_dob" placeholder="Enter Birthdate">
                </div>
                <div class="form-group">
                    <label for="user_city">City</label>
                    <input type="text" class="form-control" name="user_city" id="user_city" placeholder="Enter City">
                </div>
                <button type="submit" name="add" class="btn btn-primary">Add</button>
            </form>
        </div>
    </body>
</html>