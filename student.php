<!DOCTYPE html>
<html>
    <body>
        <?php 
            $name="Maha";
            echo "<h1> Welcome $name 👧 </h1>"."<br>";
            $greet="Welcome"." " ."$name<br>";
            echo "<h2> $greet </h2>";
            echo "<h3>string length:".strlen($name)."</h2>";
            echo "<h3>string word count:".str_word_count($greet)."</h2>"; 
        ?>
    </body>
</html>