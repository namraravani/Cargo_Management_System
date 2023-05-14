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
    $sql = "insert into cargo(cargo_id,cargo_sales,cargo_type,cargo_description,cargo_customer_id,cargo_order) values(:cargo_id,:cargo_sales,:cargo_type,:cargo_description,:cargo_customer_id,:cargo_order)";

    //create prepare statement template
    $res = $pdo->prepare($sql);

    //bind parameter to statement
    $res->bindParam(':cargo_id',$_REQUEST['cargo_id']);
    $res->bindParam(':cargo_sales',$_REQUEST['cargo_sales']);
    $res->bindParam(':cargo_type',$_REQUEST['cargo_type']);
    $res->bindParam(':cargo_description',$_REQUEST['cargo_description']);
    $res->bindParam(':cargo_customer_id',$_REQUEST['cargo_customer_id']);
    $res->bindParam(':cargo_order',$_REQUEST['cargo_order']);

    
    //execute prepare statement
    $res->execute();
    // echo  'Data Inserted!';

    echo "<script>alert('Inserted Successfull...');</script>";
    header('location:cargo.php');

    //close connection
    unset($pdo);
}
?>
