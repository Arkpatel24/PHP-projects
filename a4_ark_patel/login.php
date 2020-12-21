<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <style>
              #lon
            {
                width:70%;
            }

            table, td, th
            {    
                border: 1px solid black;
                text-align: left;
            }

            table
            {
                width: 20%;
                margin-left: 550px;
            }

            th, td
            {
                padding: 15px;
            }
            h2
            {
                margin-left: 625px;
            }
          
            #msg
            {
                width:40%;
                margin:auto;
            }
     
        </style>
    </head>
    <body>
        <div id="lon">

            <?php
            require_once 'header.php';
            ?>

            <h2>Login Table</h2>

            <form action="login1.php" method="post">
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" required autofocus></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><center><input type="submit" value="Login"></center></td>
                    </tr>
                </table>
            </form>

            <?php
            $_SESSION['un']=$_POST['username'];
           if(isset($_REQUEST['result']))
                {
                    if($_REQUEST['result'] == "fail")
                    {                        
                        echo "<p>Login failed! Please try again.</p>";
                    }
                }
            ?>
        </div>
    </body>
</html>