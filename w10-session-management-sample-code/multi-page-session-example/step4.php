<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $color=$_GET['color'];
            $name=$_SESSION['name'];
            $age=$_SESSION['age'];
            
            echo "name is ".$name."<br>";
            echo "age is ".$age."<br>";
            echo "Favorite color is ".$color;
            
            session_destroy();
        ?>

    </body>
</html>
