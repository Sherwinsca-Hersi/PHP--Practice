<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="asset\css\index.css">
    </head>
    <body>
        <div class="header">
            <img src="asset\images\logo.png">
            <ul class="nav_bar">
                <li>Home</li>
                <li>Products</li>
                <li>About Us </li>
                <li>Contact Us</li>
            </ul>
        </div>
        <div class="main_container">
            <div class="container">
                <div class="card1">
                    <h2>Yesterday's Report</h2>
                </div>
                <div class="card2">
                    <h2>Today's Report</h2>
                </div>
                <div class="card3">
                    <h2>Weekly Report</h2>
                </div>
                <div class="card4">
                    <h2>Monthly Report</h2>
                </div>
            </div>
            <div>
                <div class="card">
                    <h2>Today's Report</h2>
                </div>
                <div class="card">
                    <h2>Today's Report</h2>
                </div>
            </div>
        </div>
        <div class="form_div">
            <form method="post" action="#">
                <div class="input_div">
                    <input type="text" name="msg"  id="msg" class="msg_input" placeholder="Type Something..." required>
                </div>
                <div class="input_div">
                    <input type="text"  name="color" id="color" class="color_input" placeholder="Favourite color.." required>
                </div>
                <div class="input_div">
                    <input type="number" name="num" id="num" class="num_input" placeholder="Favourite number..">
                </div>
                <input type="submit" value="send" class="submit_btn">
                <div>
                    <?php
                        $input=$_POST['msg']??= "No data";
                        $color=$_POST['color']??= "No data";
                        $num=$_POST['num']??= "No data";
                        echo "I typed <h3> $input </h3>";
                        echo "Your Favourite color: <h3 style='color:$color;'> $color </h3>";
                        echo "Your Favourite number: <h3> $num </h3>"?? "No data";
                        // echo gettype((int) ($num));
                        if($num=="No data"){
                            echo "There is no value";
                        }
                        elseif(((int) ($num)) % 2 == 0 ){
                            echo"Your favourite number is <h3> even </h3>";
                        }
                        else{
                            echo"Your favourite number is <h3> odd </h3>";
                        }
                    ?>
                </div>
            </form>
        </div>
        <?php require_once 'learning.php';?>
        
    </body>
</html>