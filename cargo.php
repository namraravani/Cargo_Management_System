<?php
    session_start();
    $userprofile = $_SESSION['username'];
    if($userprofile==true){

    }
    else{
        echo "<script>alert('Please Login First!!!');</script>";
        echo "<script>location.href='login_page.php'</script>";
    }
?>
<html>
    <head>
        <title>Cargo</title>
    </head>
    <style>
        .content-table{
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 20px;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        .content-table thead tr{
            background-color: #058283;
            color: #fff;
            text-align: left;
            font-weight: bold;
        }
        .content-table th,
        .content-table td{
            padding: 12px 15px;
        }
        .content-table tbody tr{
            border-bottom: 1px solid #dddddd;
        }
        .content-table tbody tr:nth-of-type(even){
            background-color: #f3f3f3;
        }
        .content-table tbody tr:last-of-type{
            border-bottom: 2px solid #009829;
        }
        .content-table tbody tr.active-row:hover{
            font-weight: bold;
            color: #fff;
            background-color:cornflowerblue;
        }
        .btn1{
            border-radius: 5px;
            background-color: green;
            width: 100px;
            height: 50px;
            font-size: 25px;
            cursor: pointer;
        }
        .btn1:hover{
            background-color: #fff;
            color: #058283;
        }
        .btn1 a{
            text-decoration: none;
            color: inherit;
        }
        .btn2{
            border-radius: 5px;
            background-color: red;
            width: 100px;
            height: 50px;
            font-size: 25px;
            cursor: pointer;
        }
        .btn2:hover{
            background-color: #fff;
            color: #058283;
        }
        .btn2 a{
            text-decoration: none;
            color: inherit;
        }
        .btn3{
            border-radius: 5px;
            background-color: blue;
            width: 100px;
            height: 50px;
            font-size: 25px;
            cursor: pointer;
        }
        .btn3:hover{
            background-color: #fff;
            color: #058283;
        }
        .btn3 a{
            text-decoration: none;
            color: inherit;
        }
        .add{
            height: 10vh;
            width: 100%;
        }
    </style>
    <body>
        <div class="add">
            <div class="btn">
                <button type="submit" class="btn1"><a href="add_cargo_form.php">Add</a></button>
            </div>
        </div>
        <?php
            if(isset($_REQUEST['msg'])){
                ?>
                <h4><?php echo $_REQUEST['msg'];?></h4>
                <?php
            }
        ?>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Sales</th>
                    <th>Type</th> 
                    <th>Description</thtyle=>
                    <th>Customer_Id</th>
                    <th>Order</th>
                    <th colspan="2" align="center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once "dbconfig.php";
                    $sql = "select * from cargo";
                    $res = $pdo->query($sql);
                    if($res->rowCount()>0)
                    {
                        while($row = $res->fetch()){
                            ?>
                            <tr class="active-row">
                                <td><?php $row['cargo_id']?></td>
                                <td><?php echo $row["cargo_sales"]; ?></td>
                                <td><?php echo $row["cargo_type"]; ?></td>
                                <td><?php echo $row["cargo_description"]; ?></td>
                                <td><?php echo $row["cargo_customer_id"]; ?></td>
                                <td><?php echo $row["cargo_order"]; ?></td>
                                <td><button type="submit" class="btn3"><a href="update_cargo.php?cargo_id=$row[cargo_id]&cargo_sales=$row[cargo_sales]&cargo_type=$row[cargo_type]&cargo_description=$row[cargo_description]&cargo_customer_id=$row[cargo_customer_id]&cargo_order=$row[cargo_order]">Edit</a></button></td>
                                <td><button type="submit" name="delete" class="btn2"><a href="delete_cargo.php?cargo_id=<?php echo $row['cargo_id'];?>" onclick="return confirm('are you sure to delete');">Delete</a></button></td>
                            </tr>
                            <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>