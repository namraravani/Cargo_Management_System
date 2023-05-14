<!-- 1. PHP Data Objects(PDO)

Syntax:
$pdo = new PDO("mysql:host = hostname; dbname=database_name",username,password);

PDO_demo - project folder database_name
    1. dbconfig.php - this file have database configuration
    2. index.php - this will list all the records from database table 
    3. add_student.php - to create new record in DB
    4. edit_student.php - to edit and update the existing record from the DB -->

<?php
    //database configuration to connect with DB
    try{
        $pdo = new PDO("mysql:host=localhost:4090; dbname=mycargo","root","Namra1463@123");

        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        ?>
        <?php
    }
    catch(PDOException $e){
        ?>
        <script>alert("Connection Error");</script>
        <?php
    }
?>