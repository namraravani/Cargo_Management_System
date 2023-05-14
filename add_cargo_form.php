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
        <title>Add Cargo</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="add_style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <form action="add_cargo.php" method="post">
                <h4 class="display-4 text-center">ADD</h4><hr><br>
                <div class="form-group">
                    <label for="cargo_id">ID</label>
                    <input type="number" class="form-control" name="cargo_id" id="cargo_id" placeholder="Enter Cargo id">
                </div>
                <div class="form-group">
                    <label for="cargo_sales">Sales</label>
                    <input type="number" class="form-control" name="cargo_sales" id="cargo_sales" placeholder="Enter Cargo Sale">
                </div>
                <div class="form-group">
                    <label for="cargo_type">Type</label>
                    <input type="text" class="form-control" name="cargo_type" id="cargo_type" placeholder="Enter Cargo Type">
                </div>
                <div class="form-group">
                    <label for="cargo_description">Description</label>
                    <input type="text" class="form-control" name="cargo_description" id="cargo_description" placeholder="Enter Cargo Description">
                </div>
                <div class="form-group">
                    <label for="cargo_customer_id">Customer Id</label>
                    <input type="number" class="form-control" name="cargo_customer_id" id="cargo_customer_id" placeholder="Enter Cargo Customer id">
                </div>
                <div class="form-group">
                    <label for="cargo_order">Order Id</label>
                    <input type="text" class="form-control" name="cargo_order" id="cargo_order" placeholder="Enter Cargo Order">
                </div>
                <button type="submit" name="add" class="btn btn-primary">Add</button>
            </form>
        </div>
    </body>
</html>