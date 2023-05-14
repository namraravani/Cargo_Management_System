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
        <title>Add Bill</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="add_style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <form action="add_bill.php" method="post">
                <h4 class="display-4 text-center">ADD</h4><hr><br>
                <div class="form-group">
                    <label for="bill_id">ID</label>
                    <input type="number" class="form-control" name="bill_id" id="bill_id" placeholder="Enter Bill ID">
                </div>
                <div class="form-group">
                    <label for="bill_description">Description</label>
                    <input type="text" class="form-control" name="bill_description" id="bill_description" placeholder="Enter Bill Description">
                </div>
                <div class="form-group">
                    <label for="bill_no">No</label>
                    <input type="number" class="form-control" name="bill_no" id="bill_no" placeholder="Enter Bill No">
                </div>
                <div class="form-group">
                    <label for="bill_type">Type</label>
                    <input type="text" class="form-control" name="bill_type" id="bill_type" placeholder="Enter Bill Type">
                </div>
                <div class="form-group">
                    <label for="bill_customer_id">Customer ID</label>
                    <input type="number" class="form-control" name="bill_customer_id" id="bill_customer_id" placeholder="Enter Customer ID">
                </div>
                <button type="submit" name="add" class="btn btn-primary">Add</button>
            </form>
        </div>
    </body>
</html>