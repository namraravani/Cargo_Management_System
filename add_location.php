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
    $sql = "insert into location(start_from,end_to,pincode,customer_id) values(:start_from,:end_to,:pincode,:customer_id)";

    //create prepare statement template
    $res = $pdo->prepare($sql);

    //bind parameter to statement
    $res->bindParam(':start_from',$_REQUEST['start_from']);
    $res->bindParam(':end_to',$_REQUEST['end_to']);
    $res->bindParam(':pincode',$_REQUEST['pincode']);
    $res->bindParam(':customer_id',$_REQUEST['customer_id']);

    
    //execute prepare statement
    $res->execute();
    // echo  'Data Inserted!';

    echo "<script>alert('Inserted Successfull...');</script>";

    //close connection
    unset($pdo);
}
?>
