<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales</title>
</head>
<body>
    <form method="post" action="addproduct.php">
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="p_name">
        <label for="mrp">MRP:</label>
        <input type="number" id="mrp" name="p_price">
        <label for="date">Date:</label>
        <input type="date" id="date" name="p_date">
        <input type="submit" value="add" name="add">
    </form>
        <?php
            require_once('connect.php');
        ?>

        <h1> Product Details </h1>
        <table rules="all" cellpadding="20px" cellspacing="20px" style="border:2px solid grey;">
            <?php
                $display_query="SELECT * FROM product";
                $display_result=mysqli_query($conn,$display_query);
                $i=1;
            ?>
            <tr>
                <th>S.No</th>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Mrp</th>
                <th>Date</th>
            </tr>
            <?php
            while($row=mysqli_fetch_array($display_result)){
            ?>
            <tr>
                <td><?=$i;?></td>
                <td><?=$row['id'];?></td>
                <td><?=$row['product_name'];?></td>
                <td>Rs.<?=$row['mrp'];?></td>
                <td><?=$row['date'];?></td> 
                <?php 
                $i++;
                ?>
            </tr>
            <?php
            }
            ?>
        </table><br><br>
        <form method="post" action="index.php">
            <label for="fr_date">From</label>
            <input type="date" name="fr_date">
            <label for="to_date">From</label>
            <input type="date" name="to_date">
            <input type="submit" name="search" value="search">
        </form>
        <?php
            if(isset($_POST['search'])){
                $frdate= $_POST['fr_date'];
                $todate= $_POST['to_date'];
            ?>
                <table rules="all" cellpadding="20px" cellspacing="20px" style="border:2px solid grey;">
            <?php
                 $search_query="SELECT * FROM product WHERE date between '$frdate' and '$todate'";
                 $search_result=mysqli_query($conn,$search_query);
                $i=1;
            ?>
            <tr>
                <th>S.No</th>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Mrp</th>
                <th>Date</th>
            </tr>
            <?php
                 echo "<h3>From Date $frdate to $todate:</h3>";
            while($row=mysqli_fetch_array($search_result)){
            ?>
            <tr>
                <td><?=$i;?></td>
                <td><?=$row['id'];?></td>
                <td><?=$row['product_name'];?></td>
                <td>Rs.<?=$row['mrp'];?></td>
                <td><?=$row['date'];?></td> 
                <?php 
                $i++;
                ?>
            </tr>
            <?php
            }
            ?>
        </table><br><br>
        <?php
            }
        ?>
    </body>
</html>