<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Products</title>

        <style>
            #container
            {
                display:flex;
                background-color: lightblue;
            }

            table
            {
                border-collapse: collapse;
                width: 50%;
                margin: auto;
            }

            th, td
            {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){background-color: #f2f2f2}

            th
            {
                background-color: #4CAF50;
                color: white;
            }

            h2, h3
            {
                text-align: center;
            }
             .nav{
                float: left;
                 margin-left: 250px;
                 
            }
            .nav a{
                float: left;
                display: block;
                padding: 25px 18px;
                font-size: 20px;
                text-decoration: none;
                color: black;
            }
            
            .nav :hover{
                background-color: yellowgreen;
            }
            .logo{
                display : flex;
                margin-left: 300px;
            }
        </style>
    </head>
    <body>
        <div id="container">

            <div class="logo"><h1>View Products</h1></div>

            <div class="nav">
            <a href="index.php" >Home</a>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
            <a href="addProduct.php">Add Products</a>
            <a href="viewproduct.php">View Products </a>
        </div>
            
        </div>
            
            <hr>
           

                <?php

                $host = 'localhost';
                $username = 'pate1616_admin';
                $password = 'k?O])&ucq4_Z';
                $db_name = 'pate1616_mydb';

                $conn = mysqli_connect($host, $username, $password, $db_name);

               
                if (empty($conn))
                {
                    die("Connection failed: <br>" . mysqli_connect_error());
                }


                // query to select data from table
                $query = "select * from productstbl";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) 
                {    
                    echo "<table id='products'>";
                    echo "<tr><th>Row #</th>";
                    echo "<th>Product Name</th>";
                    echo "<th>Product Price</th></tr>";
                    
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr><td>$i</td>";
                        echo "<td>" . $row['ProductName'] . "</td>";
                        echo "<td>" . $row['ProductPrice'] . "</td></tr>";

                        $i++;
                    }
                    
                    echo "</table>";
                }
                else
                {
                    echo "<h3>The table is empty.</h3>";
                }
                ?>
        </div>
    </body>
</html>

