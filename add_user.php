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
    $sql = "insert into user_cargo(user_id,user_role_id,user_name ,user_email,user_dob,user_city) values(:user_id,:user_role_id,:user_name,:user_email,:user_dob,:user_city)";

    //create prepare statement template
    $res = $pdo->prepare($sql);

    //bind parameter to statement
    $res->bindParam(':user_id',$_REQUEST['user_id']);
    $res->bindParam(':user_role_id',$_REQUEST['user_role_id']);
    $res->bindParam(':user_name',$_REQUEST['user_name']);
    $res->bindParam(':user_email',$_REQUEST['user_email']);
    $res->bindParam(':user_dob',$_REQUEST['user_dob']);
    $res->bindParam(':user_city',$_REQUEST['user_city']);

    
    //execute prepare statement
    $res->execute();
    // echo  'Data Inserted!';

    echo "<script>alert('Inserted Successfull...');</script>";

    //close connection
    unset($pdo);
}
?>