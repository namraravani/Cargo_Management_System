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
        <title>Add Customer</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="add_style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <form action="add_customer.php" method="post">
                <h4 class="display-4 text-center">ADD</h4><hr><br>
                <div class="form-group">
                    <label for="customer_id">ID</label>
                    <input type="number" class="form-control" name="customer_id" id="customer_id" placeholder="Enter Customer ID">
                </div>
                <div class="form-group">
                    <label for="customer_name">Name</label>
                    <input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="Enter Customer Name">
                </div>
                <div class="form-group">
                    <label for="customer_mobile">Mobile</label>
                    <input type="number" class="form-control" name="customer_mobile" id="customer_mobile" placeholder="Enter Customer Mobile">
                </div>
                <div class="form-group">
                    <label for="customer_city">City</label>
                    <input type="text" class="form-control" name="customer_city" id="customer_city" placeholder="Enter Customer City">
                </div>
                <div class="form-group">
                    <label for="customer_email">Email</label>
                    <input type="email" class="form-control" name="customer_email" id="customer_email" placeholder="Enter Customer Email">
                </div>
                <div class="form-group">
                    <label for="customer_password">Password</label>
                    <input type="password" class="form-control" name="customer_password" id="customer_password" placeholder="Enter Customer Password">
                </div>
                <div class="form-group">
                    <label for="customer_username">Username</label>
                    <input type="password" class="form-control" name="customer_username" id="customer_username" placeholder="Enter Customer Username">
                </div>
                <button type="submit" name="add" class="btn btn-primary">Add</button>
            </form>
        </div>
    </body>
</html>