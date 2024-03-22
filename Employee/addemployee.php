
<?php

require_once 'connect.php';

if(isset($_POST['add'])){

    $employee_name=$_POST['empname'];
    $employee_job=$_POST['job'];
    $employee_salary=$_POST['salary'];
    $employee_dept=$_POST['department'];
    $employee_email=$_POST['email'];

    if(strlen($employee_name)<3){

        echo "<script> alert('Name should be atleast 3 characters!!');</script>"; 

    }else if(strlen($employee_salary)<3){

        echo "<script> alert('Salary should not be less than 100!!');</script>"; 

    }else if((!filter_var($employee_email, FILTER_VALIDATE_EMAIL))){

        echo "<script> alert('Email is invalid!!');</script>";

    }else{

        $insert_query="INSERT INTO employees (empname,job,salary,dept,email) values('".$_POST['empname']."','".$_POST['job']."','".$_POST['salary']."','".$_POST['department']."','".$_POST['email']."')";
        $insert_result=mysqli_query($conn, $insert_query);        

    }

    echo "<script>window.location.href='mainpage.php';</script>";
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="employee_card">
    <form method="post" action="addemployee.php">
        Name:<input type="text" name="empname" required><br><br>
        Job:<select name="job" required>
            <option disabled>Select Job </option>
            <?php
            
            $dd_job="SELECT * FROM roles";
            $job_res=mysqli_query($conn, $dd_job);
            
            while($row=mysqli_fetch_array($job_res)){
                
            ?>
            <option value="<?=$row['title']?>"><?=$row['title']?></option>
            <?php } ?>
        </select><br><br>
        Salary:<input type="text" name="salary" required><br><br>
        Department:<select name="department" required>
        <option disabled>Select Department </option>
        
        <?php
        
        $dd_dept="SELECT * FROM department";
        $dept_res=mysqli_query($conn, $dd_dept);
        
        while($row=mysqli_fetch_array($dept_res)){
            
        ?>
        <option value="<?=$row['dept_type']?>"><?=$row['dept_type']?></option>
        <?php } ?>
        </select><br><br>
        Email:<input type="text" name="email" required><br><br>
        <input type="submit" name="add" value="Add" id="btn_style">
    </form>
    </div>
    
</body>
</html>