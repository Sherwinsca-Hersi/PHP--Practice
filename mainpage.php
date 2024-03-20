<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="asset/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
require_once 'connect.php';
$display_table="SELECT * FROM employees";
$display_result=mysqli_query($conn, $display_table);
?>
<h1 style="text-align:center;">Employee Details</h1>
<a href="filtering.php" class="filter_btn"><button><i class="fa fa-solid fa-filter" style="color: #0c0d0d;"></i>Filter</button></a>
<a href="addemployee.php" class="add_emp_btn"><button><i class="fa fa fa-user-plus" aria-hidden="true"></i>Add Employee</button></a>
<table rules='all' cellpadding='20px' cellspacing='20px' style='border:3px solid whitesmoke; width: 95%;margin:auto;' id="myTable">

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
    
    <tr onclick="passData(<?=$row['id']?>)">
        <td><?=$i?> </td>
        <td><?=$row['empname']?></td>
        <td><?=$row['job']?></td>
        <td><?=$row['salary']?></td>
        <td><?=$row['dept']?></td>
        <td><?=$row['email']?></td>
        <td><a href="updateEmployee.php?show_id=<?=$row['id']?>"><i class="fa fas fa-edit"></i></td>
        <td><a href="deleteEmployee.php?delete_id=<?=$row['id']?>" onclick="return confirm('Do you really want to delete?');"><i class='fa fa-trash' aria-hidden='true' style='color:red;'></i></a></td>
      
      </tr>
      </a>
    <?php
    $i++;
}
?>
</table>

</body>

<script>

const passData =(id) => {

  const a = document.createElement('a');
  a.href = `mainpage.php?show_id=${id}`;
  a.click();

}

</script>

</html>