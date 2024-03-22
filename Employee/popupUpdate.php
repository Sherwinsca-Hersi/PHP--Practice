<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>All Calls & Actions </title>

	<!-- Add jQuery library -->
	<script type="text/javascript" src="lib/jquery-1.10.2.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="lib/jquery.mousewheel.pack.js?v=3.1.3"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />

</head>
<body>
<?php
if(isset($_GET['show_id'])){

    $show_Id = $_GET['show_id'];
$conn=new mysqli("localhost","root","","employee");
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
</html>