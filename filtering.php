<?php

error_reporting(E_ERROR | E_PARSE);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtering Values using php</title>
    <link rel="stylesheet" href="asset/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
        require_once 'connect.php';
    ?>
    <form method="post" action="filtering.php" class="filter_form">
        <select name="job" placeholder="Filter by job">
            <option disabled selected>Filter by job</option>
            <?php
            
            $dd_job="SELECT * FROM roles";
            $job_res=mysqli_query($conn, $dd_job);
            
            while($row=mysqli_fetch_array($job_res)){
                
            ?>
            <option value="<?=$row['title']?>"><?=$row['title']?></option>
            <?php } ?>
        </select><br><br>
        <input type="text" name="salary" placeholder="Filter by salary"><br><br>
        <select name="department" placeholder="Filter by department">
        <option disabled selected>Filter By department </option>
        
        <?php
        
        $dd_dept="SELECT * FROM department";
        $dept_res=mysqli_query($conn, $dd_dept);
        
        while($row=mysqli_fetch_array($dept_res)){
            
        ?>
        <option value="<?=$row['dept_type']?>"><?=$row['dept_type']?></option>
        <?php } ?>
        </select><br><br>
        <input type="submit" value="Filter" name="filter">
    </form>
    <?php
    if(isset($_POST['filter'])){
        $employee_job=$_POST['job'];
        $employee_salary=$_POST['salary'];
        $employee_dept=$_POST['department'];
        $display_table="SELECT * FROM employees where (job='$employee_job' OR dept='$employee_dept')";
        $display_result=mysqli_query($conn, $display_table);
    ?>
        <a href="addemployee.php" class="add_emp_btn"><button><i class="fa fa fa-user-plus" aria-hidden="true"></i>Add Employee</button></a>
        <h1 style="text-align:center;">Employee Details</h1>
        <h2 style="text-align:left;margin-left:3%;clear:left;">Filtered List:</h2>
        <table rules='all' cellpadding='20px' cellsacing='20px' style='border:3px solid whitesmoke;  width: 95%;margin:auto;'>
        <?php 
        echo "<tr style='background-color:skyblue;font-weight:bold;'>";
        echo "<td>S.No</td>";
        echo "<td>Name</td>";
        echo "<td>Job</td>";
        echo "<td>Salary</td>";
        echo "<td>Department</td>";
        echo "<td>Email Id</td>";
        echo "<td>Edit</td>";
        echo "<td>Delete</td>";
        echo "</tr>";
        $i=1;
        while($row=mysqli_fetch_array($display_result)){
            ?>
            <tr>
                <td><?=$i?> </td>
                <td><a href="showEmployee.php?show_id=<?=$row['id']?>" class="empname_linkstyle"><?=$row['empname']?></a></td>
                <td><?=$row['job']?></td>
                <td><?=$row['salary']?></td>
                <td><?=$row['dept']?></td>
                <td><?=$row['email']?></td>
                <td><a href="updateEmployee.php?show_id=<?=$row['id']?>"><i class="fa fas fa-edit"></i></td>
                <td><a href="deleteEmployee.php?delete_id=<?=$row['id']?>" onclick="return confirm('Do you really want to delete?');"><i class='fa fa-trash' aria-hidden='true' style='color:red;'></i></a></td>
            </tr>
            <?php
            $i++;
        }
        ?>
        </table>
<?php
    }
?>
</body>
</html>