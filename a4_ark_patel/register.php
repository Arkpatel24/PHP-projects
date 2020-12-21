<!DOCTYPE html>
<html>
    <head>
        <title>Registration Page</title>
        <style>
            #reg
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
        <div id="reg">
            <?php
                require_once 'header.php';
            ?>

            <h2>Register Table</h2>

            <form action="register1.php" method="post">
                <table >
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" required autofocus></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><center><input type="submit" value="Register"></center></td>
                    </tr>
                </table>
            </form>
             <?php
                if (isset($_REQUEST['result']))
                    {
                        if ($_REQUEST['result'] == "userexists")
                            {
                                echo "<p>This username is already taken up. Please try again.</p>";                           
                            }
                        else if ($_REQUEST['result'] == "success")
                            {
                                echo "<p>New user was registered</p>";
                                
                            }
                        else if ($_REQUEST['result'] == "fail")
                            {
                                echo "<p>New user was not registered</p>";
                            }
                    }
            ?>
          
        </div>
    </body>
</html>


