<?php
require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searching Employee</title>
</head>
<body>
    <form method="post" action="<?php $_SERVER["PHP_SELF"]?>">
          <input type="text" name="search">
          <input type="submit" name="submit">
    </form><br><br>
    <?php
    if(isset($_POST['submit'])){
        $search=$_POST['search'];
        $search_query="SELECT * FROM employees WHERE empname LIKE '%$search%'";
        $search_result=mysqli_query($conn,$search_query);
        echo "Recently searched Record:";
        echo "<table cellpadding='2' cellspacing='2' style='border:1px solid black;'>";
        echo "<tr>";
        echo "<td>S.No</td>";
        echo "<td>Name</td>";
        echo "<td>Job</td>";
        echo "<td>Salary</td>";
        echo "<td>Department</td>";
        echo "<td>Email</td>";
        echo "</tr>";
        $i=1;
        while($row=mysqli_fetch_array($search_result)){
            echo "<tr>";
            echo "<td> $i </td>";
            echo "<td>".$row['empname']."</td>";
            echo "<td>".$row['job']."</td>";
            echo "<td>".$row['salary']."</td>";
            echo "<td>".$row['dept']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "</tr>";
            $i++;
    }
    echo "</table>";
    }
    ?>
</body>
</html>