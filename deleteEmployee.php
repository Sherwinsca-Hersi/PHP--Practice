        
<?php   
    require_once 'connect.php';
    $delete_Id = $_GET['delete_id'];
    $delete_query = "DELETE FROM employees WHERE  id='$delete_Id'";
    $delete_Result=mysqli_query($conn,$delete_query);
    header("location: mainpage.php");
?>
