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
    <title>admin</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>
<body>
    <div class="main-container">
        <div class="container">
            <h2 class="logo"><span>Welcome Back,</span></h2>
            <button style="height:5vh; width:100px; color:aqua; background-color: red;" type="submit"><a href="logout_session.php">Log Out</a></button>
        </div>
        <div class="content">
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn"><a href="cargo.php">Cargo</a></button>
                </div>
                <div class="col">
                    <button type="submit" class="btn"><a href="customer.php">Customer</a></button>
                </div>
                <div class="col">
                    <button type="submit" class="btn"><a href="user.php">User</a></button>
                </div>
                <div class="col">
                    <button type="submit" class="btn"><a href="permission.php">Permission</a></button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn"><a href="payment.php">Payment</a></button>
                </div>
                <div class="col">
                    <button type="submit" class="btn"><a href="role.php">Role</a></button>
                </div>
                <div class="col">
                    <button type="submit" class="btn"><a href="billing.php">Bill</a></button>
                </div>
                <div class="col">
                    <button type="submit" class="btn"><a href="enquiry.php">Enquiry</a></button>
                </div>
            </div>
            <div class="col">
                <button type="submit" class="btn"><a href="location.php">Location</a></button>
            </div>
        </div>
    </div>
</body>
</html>