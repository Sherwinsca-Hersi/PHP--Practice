<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn=new mysqli("localhost","root","","employee");
// if($conn->connect_error){
//     echo("Connection Failed:".$conn->connect_error);
// }else{
//     echo "Database Connected successfully!!";
// }
?>