<?php
    session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if (!isset($_SESSION['count']))
            {
                $_SESSION['count']=1;
            }
            else
            {
                $_SESSION['count']++;
            }
            if($_SESSION['count']==5)
            {
                echo "Session is destroyed <br>";
                session_destroy();
            }
            echo "Page is viewed ". $_SESSION['count']." times";
        ?>
    </body>
</html>
