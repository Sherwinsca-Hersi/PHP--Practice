<?php
        require_once('connect.php');

        if(isset($_POST['add'])){

            $pname=$_POST['p_name'];
            $pprice=$_POST['p_price'];
            $pdate=$_POST['p_date'];

            $insert_query="INSERT INTO product (product_name,mrp,date) values ('$pname','$pprice','$pdate')";
            $insert_result=mysqli_query($conn,$insert_query);

        }
        header("location: index.php");
?>