<?php
// $greet = 'hello';//string
// $i = 5;//int
// $x=3.5;//float-double
// $y=false;//boolean
// $x1="null";//null
// $x2="f";
// $colors=array("red","blue","yellow");

//     echo $colors[2]. "\n" .var_dump($colors) ."\n". gettype($colors) ."\n\n";

//     if($y===true){
//         echo "It is Boolean-true";
//     }
//     if($y===false){
//         echo "It is Boolean-false"."\n";
//     }

    // echo '<script>alert("hello world")</script>';

// $name="Maha";

// echo "Welcome $name" ."\n";
// echo 'Welcome $name'."\n";
// $greet="Welcome"." " ."$name\n";
// echo "string length:".strlen($name)."\n";
// echo "string word count:".str_word_count($greet)."\n";   
// echo "Line 1 \r\nLine 2\n";
// echo "Hello,\nworld\r!";

// function local(){
//     static $y=10;
//     $y++;
//     echo " \n $y \n"; 
// }

// local();
// local();
// local();
// $x=2;
// $y=$x;
// if ($x==2){
//     $y=2;
// }
// else{
//     $y=3;
// }
// echo $y;
//reference variable

// $z='abc';

$name="sherwinhersi";
$domain="gmail.com";
// $name.="shero";
// $email=$name."@".$domain;
// echo $email."<br>";

// $total=17;
// echo $total;

//while loop..
// echo " While Loop Values are:";
// while($total > 0 ){
//     $total--;
//     echo  $total.",";
// }
// echo "<br>";
// //for loop..
// echo "For Loop Values are:";
// for($num=10;$num<=100;$num+=10){
//     echo $num,"  ";
// }
echo "<pre>";
print_r($_SERVER);
print_r($_ENV);
echo getenv($name);
echo"</pre>";
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
                <input name="rows" type="text" size="4">
                <input name="columns" type="text" size="4">
                <input type="submit" name="submit">
        </form>
        <?php
        if(!isset($_POST['submit'])){
        ?>
        <?php
        }
        else
        {
        ?>
        <table border="1" cellspacing="10" cellpadding="20">
        <?php
          $rows=$_POST['rows'];
          $columns=$_POST['columns'];
          $i = 1;

          for($r=1;$r<=$rows; $r++){
            echo "<tr>";
            for($c=1;$c<=$columns; $c++){
                echo"<td>&nbsp;".$i."</td> <br>";
                $i++;
            }
            echo "</tr> <br>";
          }
        ?>
        </table>
        <?php
        }
        ?>
        <br><br>
    </body>
</html>