<?php

session_start();
$userprofile = $_SESSION['username'];
if($userprofile==true){

}
else{
    echo "<script>alert('Please Login First!!!');</script>";
    echo "<script>location.href='login_page.php'</script>";
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once "dbconfig.php";

    //SQL insert Statement
    $sql = "insert into customer(customer_id,customer_name
    ,customer_mobile,customer_city,customer_email,customer_password,customer_username) values(:customer_id,:customer_name,:customer_mobile,:customer_city,:customer_email,:customer_password,:customer_username)";

    //create prepare statement template
    $res = $pdo->prepare($sql);

    //bind parameter to statement
    $res->bindParam(':customer_id',$_REQUEST['customer_id']);
    $res->bindParam(':customer_name',$_REQUEST['customer_name']);
    $res->bindParam(':customer_mobile',$_REQUEST['customer_mobile']);
    $res->bindParam(':customer_city',$_REQUEST['customer_city']);
    $res->bindParam(':customer_email',$_REQUEST['customer_email']);
    $res->bindParam(':customer_password',$_REQUEST['customer_password']);
    $res->bindParam(':customer_username',$_REQUEST['customer_username']);

    
    //execute prepare statement
    $res->execute();
    // echo  'Data Inserted!';

    echo "<script>alert('Inserted Successfull...');</script>";

    //close connection
    unset($pdo);
}
?>
