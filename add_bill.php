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
    $sql = "insert into billing(bill_id,bill_description,bill_no,bill_type,bill_customer_id) values(:bill_id,:bill_description,:bill_no,:bill_type,:bill_customer_id)";

    //create prepare statement template
    $res = $pdo->prepare($sql);

    //bind parameter to statement
    $res->bindParam(':bill_id',$_REQUEST['bill_id']);
    $res->bindParam(':bill_description',$_REQUEST['bill_description']);
    $res->bindParam(':bill_no',$_REQUEST['bill_no']);
    $res->bindParam(':bill_type',$_REQUEST['bill_type']);
    $res->bindParam(':bill_customer_id',$_REQUEST['bill_customer_id']);
    $res->bindParam(':cargo_order',$_REQUEST['cargo_order']);

    
    //execute prepare statement
    $res->execute();
    // echo  'Data Inserted!';

    echo "<script>alert('Inserted Successfull...');</script>";

    //close connection
    unset($pdo);
}
?>
