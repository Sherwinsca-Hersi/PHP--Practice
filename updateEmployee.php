<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>
    <link rel="stylesheet" type="text/css" href="asset\css\index.css">
</head>
<body>
<?php
require_once 'connect.php';

if(isset($_GET['show_id'])){

    $show_Id = $_GET['show_id'];
    $query = "select * from employees where id='$show_Id'";
    $queryResult=mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($queryResult))
    {
    ?>
    <div class="employee_card">
        <?php
        echo "<h2>Employee Details</h2><br>";
        ?>
        <form method="post" action="updateEmployee.php?show_id=<?=$_GET['show_id']?>">
            Name:<input type="text" name="empname" value="<?php echo $row['empname'];?>" required><br><br>
            Job:
            <select name="job"  value="<?php echo $row['job'];?>" required>
            <option disabled>Select Job </option>
            <?php
                $dd_job="SELECT * FROM roles";
                $job_res=mysqli_query($conn, $dd_job);
            
                while($row_job=mysqli_fetch_array($job_res)){
                
            ?>
            <option value="<?=$row_job['title'];?>"><?=$row_job['title'];?></option>
            <?php } ?>
            </select><br><br>
            Salary:<input type="text" name="salary" value="<?php echo $row['salary'];?>" required><br><br>
            Department:<select name="department"  value="<?= $row['dept'];?>" required>
            <?php
                $dd_dept="SELECT * FROM department";
                $dept_res=mysqli_query($conn, $dd_dept);
        
                while($row_dept=mysqli_fetch_array($dept_res)){
            
            ?>
            <option value="<?=$row_dept['dept_type'];?>"><?=$row_dept['dept_type'];?></option>
            <?php } ?>
            </select><br><br>
            Email:<input type="email" name="email" value="<?php echo $row['email'];?>" required><br><br>
            <input type="submit" name="update" value="submit" id="btn_style">
        </form>
    </div>

    <?php
    }
}
?>
</body>
<?php

if(isset($_POST['update'])){

$employee_name=$_POST['empname'];
$employee_job=$_POST['job'];
$employee_salary=$_POST['salary'];
$employee_dept=$_POST['department'];
$employee_email=$_POST['email'];

$update_query="UPDATE `employees` SET `empname`='$employee_name',`job`='$employee_job', `salary`='$employee_salary', `dept`='$employee_dept',`email`='$employee_email' where id='$show_Id'";

$update_result=mysqli_query($conn,$update_query);

header("location: mainpage.php");

}
                
?>
</html>
    