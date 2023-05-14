<?php
include("dbconfig.php");
error_reporting(0);
echo $cargo_id = $_GET['cargo_id'];
echo $cargo_sales = $_GET['cargo_sales'];
$cargo_type = $_GET['cargo_type'];
$cargo_description = $_GET['cargo_description'];
$cargo_customer_id = $_GET['cargo_customer_id'];
$cargo_order = $_GET['cargo_order'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Cargo</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="add_style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <form action="add_cargo.php" method="post">
                <h4 class="display-4 text-center">Edit</h4><hr><br>
                <div class="form-group">
                    <label for="cargo_id">ID</label>
                    <input type="number" class="form-control" value="<?php '$cargo_id' ?>" name="cargo_id" id="cargo_id">
                </div>
                <div class="form-group">
                    <label for="cargo_sales">Sales</label>
                    <input type="number" class="form-control" value="<?php echo '$cargo_sales' ?>" name="cargo_sales" id="cargo_sales">
                </div>
                <div class="form-group">
                    <label for="cargo_type">Type</label>
                    <input type="text" class="form-control" value="<?php echo '$cargo_type' ?>" name="cargo_type" id="cargo_type">
                </div>
                <div class="form-group">
                    <label for="cargo_description">Description</label>
                    <input type="text" class="form-control" value="<?php echo '$cargo_description' ?>" name="cargo_description" id="cargo_description">
                </div>
                <div class="form-group">
                    <label for="cargo_customer_id">Customer Id</label>
                    <input type="number" class="form-control" value="<?php echo '$cargo_customer_id' ?>" name="cargo_customer_id" id="cargo_customer_id">
                </div>
                <div class="form-group">
                    <label for="cargo_order">Order Id</label>
                    <input type="text" class="form-control" value="<?php echo '$cargo_order' ?>" name="cargo_order" id="cargo_order">
                </div>
                <button type="submit" name="add" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </body>
</html>