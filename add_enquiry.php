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
    $sql = "insert into enquiry(enquiry_id,enquiry_type,enquiry_description,enquiry_title,enquiry_date) values(:enquiry_id,:enquiry_type,:enquiry_description,:enquiry_title)";

    //create prepare statement template
    $res = $pdo->prepare($sql);

    //bind parameter to statement
    $res->bindParam(':enquiry_id',$_REQUEST['enquiry_id']);
    $res->bindParam(':enquiry_type',$_REQUEST['enquiry_type']);
    $res->bindParam(':enquiry_description',$_REQUEST['enquiry_description']);
    $res->bindParam(':enquiry_title',$_REQUEST['enquiry_title']);
    $res->bindParam(':enquiry_date',$_REQUEST['enquiry_date']);
    
    //execute prepare statement
    $res->execute();
    // echo  'Data Inserted!';

    echo "<script>alert('Inserted Successfull...');</script>";

    //close connection
    unset($pdo);
}
?>
a