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
            $username=$_POST['username'];
            $password=$_POST['password'];
            
            if($username == "abc" && $password == "abc")
            {
                $_SESSION['username']=$username;
                echo "Welcome to this website $username";
            }
            else 
                {
                echo 'username or password is not correct';
                }
        ?>
    </body>
</html>
