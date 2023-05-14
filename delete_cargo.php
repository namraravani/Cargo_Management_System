<?php

session_start();
$userprofile = $_SESSION['username'];
if($userprofile==true){

}
else{
    echo "<script>alert('Please Login First!!!');</script>";
    echo "<script>location.href='login_page.php'</script>";
}

require_once "dbconfig.php";

if(isset($_GET['cargo_id'])){
    $id = $_GET['cargo_id'];
    $sql = "DELETE FROM cargo WHERE cargo_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    if($stmt->rowCount()>0){
        echo "<script>alert('Record deleted successfully');</script>";
    }else{
        echo "<script>alert('Error in deleting...');</script>";
    }
    header("Location:cargo.php?");
}
?>