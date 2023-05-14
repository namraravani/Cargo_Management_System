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
    $sql = "insert into role_of_user(role_id,role_title,role_description,user_id) values(:role_id,:role_title,:role_description,:user_id)";

    //create prepare statement template
    $res = $pdo->prepare($sql);

    //bind parameter to statement
    $res->bindParam(':role_id',$_REQUEST['role_id']);
    $res->bindParam(':role_title',$_REQUEST['role_title']);
    $res->bindParam(':role_description',$_REQUEST['role_description']);
    $res->bindParam(':user_id',$_REQUEST['user_id']);
    
    //execute prepare statement
    $res->execute();
    // echo  'Data Inserted!';

    echo "<script>alert('Inserted Successfull...');</script>";

    //close connection
    unset($pdo);
}
?>
