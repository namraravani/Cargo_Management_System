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
    $sql = "insert into payment(payment_id,payment_bill,payment_type,payment_description,payment_date,payment_customer_id) values(:payment_id,:payment_bill,:payment_type,:payment_description,:payment_date,:payment_customer_id)";

    //create prepare statement template
    $res = $pdo->prepare($sql);

    //bind parameter to statement
    $res->bindParam(':payment_id',$_REQUEST['payment_id']);
    $res->bindParam(':payment_bill',$_REQUEST['payment_bill']);
    $res->bindParam(':payment_type',$_REQUEST['payment_type']);
    $res->bindParam(':payment_description',$_REQUEST['payment_description']);
    $res->bindParam(':payment_date',$_REQUEST['payment_date']);
    $res->bindParam(':payment_customer_id',$_REQUEST['payment_customer_id']);
    
    //execute prepare statement
    $res->execute();
    // echo  'Data Inserted!';

    echo "<script>alert('Inserted Successfull...');</script>";

    //close connection
    unset($pdo);
}
?>
