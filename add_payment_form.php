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
        <title>Add Payment</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="add_style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <form action="add_payment.php" method="post">
                <h4 class="display-4 text-center">ADD</h4><hr><br>
                <div class="form-group">
                    <label for="payment_id">ID</label>
                    <input type="number" class="form-control" name="payment_id" id="payment_id" placeholder="Enter Customer ID">
                </div>
                <div class="form-group">
                    <label for="payment_bill">Bill</label>
                    <input type="text" class="form-control" name="payment_bill" id="payment_bill" placeholder="Enter Payment Bill">
                </div>
                <div class="form-group">
                    <label for="payment_type">Type</label>
                    <input type="text" class="form-control" name="payment_type" id="payment_type" placeholder="Enter Payment Type">
                </div>
                <div class="form-group">
                    <label for="payment_description">Description</label>
                    <input type="text" class="form-control" name="payment_description" id="payment_description" placeholder="Enter Payment Description">
                </div>
                <div class="form-group">
                    <label for="payment_date">Date</label>
                    <input type="date" class="form-control" name="payment_date" id="payment_date" placeholder="Enter Payment Date">
                </div>
                <div class="form-group">
                    <label for="payment_customer_id">Customer ID</label>
                    <input type="number" class="form-control" name="payment_customer_id" id="payment_customer_id" placeholder="Enter Customer ID">
                </div>
                <button type="submit" name="add" class="btn btn-primary">Add</button>
            </form>
        </div>
    </body>
</html>