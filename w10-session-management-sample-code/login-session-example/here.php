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
        <a href='index.php'>Home</a> | 
        <a href='here.php'>Go Here</a> | 
        <a href='there.php'>Go There</a> | 
        <a href='logout.php'>Logout</a>
        
        <br><br><br>
        <?php
            if(isset($_SESSION['username']))
            {
                echo "Welcome to here page";
            }
            else
            {
                echo "Access denied";
            }
        ?>
    </body>
</html>
