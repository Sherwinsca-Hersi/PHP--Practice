<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form php</title>
</head>

<body>
    <style>
        form{
            margin:80px;
        }

    </style>
    <form method="post" action="<?php $_SERVER["PHP_SELF"]?>">
        Name:<input type="text" name="username"><br><br>
        Address:<textarea type="text" rows="5" columns="120" name="address"></textarea><br><br>
        Favourite color:
        <select name="color">
            <option value="red">red</option>
            <option value="blue">blue</option>
            <option value="green">green</option>
            <option value="black">Black</option>
        </select><br><br>
        Select Gender:
        <input type="radio" name="gender" value="female">F
        <input type="radio" name="gender" value="male">M
        <input type="radio" name="gender" value="others">O<br><br>
        Favourite Foods:
        <input type="checkbox" name="food" value="Biriyani">Biriyani
        <input type="checkbox" name="food" value="Fried Rice">Fried Rice
        <input type="checkbox" name="food" value="Parotta">Parotta
        <input type="checkbox" name="food" value="Pizza">Pizza<br><br>
        Password:
        <input type="password" name="password"><br><br>
        <input type="submit" value="submit">
    </form>
    <?php
        // echo "Name: ".$_REQUEST["username"]."<br>";
        // echo "Address: ".$_REQUEST["address"]."<br>";
        // echo "Color: ".$_REQUEST["color"]."<br>";
        // echo "Gender: ".$_GET["gender"]."<br>";
        // echo "Food: ".$_GET["food"]."<br>";
        // echo "Password:".$_GET["password"]."<br>";
        $username=$_REQUEST["username"];
        $address=$_REQUEST["address"];
        $color=$_REQUEST["color"];
        $gender=$_REQUEST["gender"];
        $food=$_REQUEST["food"];
        $password=$_REQUEST["password"];
        
        if(empty($username) and empty($address) and empty($color) and empty($gender) and empty($food) and empty($password)){
            echo "<h1>Please enter all the required fields!!!</h1>";
        }
        if($_REQUEST["password"]=="admin@123"){
            echo "<h1>Yes!! You are in!!!.Please do proceed!!!</h1>";
        }
        else{
            echo "<h1>Sorry,You have no access.You have entered Wrong password!!</h1>";
        } 
    ?>
</body>
</html>