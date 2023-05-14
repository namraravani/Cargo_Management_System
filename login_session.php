<?php

session_start();
$uname = "Hiren";
$pass = "1234";

if($_POST['username']==$uname && $_POST['password']==$pass){
    $_SESSION['username'] = $uname;
    echo "<script>alert('New Session Started!...');</script>";
    echo "<script>location.href='admin.php'</script>";
}
else{
    echo "<script>alert('Incorrect Username or Password');</script>";
    echo "<script>location.href='login_page.php'</script>";
}

?>