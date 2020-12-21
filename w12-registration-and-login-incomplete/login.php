<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login - User Registration and Login using PHP</title>

        <style>
            #log
            {
                width:70%;
                margin:auto;
            }

            table, td, th
            {    
                border: 1px solid #ddd;
                text-align: left;
            }

            table
            {
                border-collapse: collapse;
                width: 40%;
                margin: auto;
            }

            th, td
            {
                padding: 15px;
            }

            h2
            {
                text-align: center;
            }

            #msg
            {
                width:40%;
                margin:auto;
            }
        </style>
    </head>
    <body>
        <div id="log">

            <?php
                require_once 'header.php';
            ?>

            <h2>Login</h2>

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
                        <td colspan="2"><input type="submit" value="Login"></td>
                    </tr>
                </table>
            </form>

            <?php
                if (isset($_REQUEST['result']))
                    {
                        if ($_REQUEST['result'] == "fail")
                            {
                                echo "<p>Login failed. Either username or password is incorrect. Please try again.</p>";
                            }
                    }
            ?>
        </div>
    </body>
</html>
