<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displaying Employee</title>
    <link rel="stylesheet" type="text/css" href="asset\css\index.css">
</head>
<body>
<?php

require_once 'connect.php';
$show_Id = $_GET['show_id'];
$query = "select * from employees where id='$show_Id'";
$queryResult=mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($queryResult))
    {
    ?>
    <div class="employee_card">
        <?php
        echo "<h2>Employee Details<h2><br>";
        ?>
        <h2>Name:<?php echo $row['empname'];?></h2>
        <h2>Job:<?php echo $row['job'];?></h2>
        <h2>Salary:<?php echo $row['salary'];?></h2>
        <h2>Department:<?php echo $row['dept'];?></h2>
        <h2>Email:<?php echo $row['email'];?></h2>
        <form method="post" action="showEmployee.php">
            <input type="submit" name="close" value="Close">
        </form>
        
        <?php
        if(isset($_POST['close'])){
            header("location: mainpage.php");
        }
        ?>
    </div>

    <?php
    }
    ?>
</body>
</html>