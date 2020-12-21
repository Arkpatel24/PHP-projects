<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Products - Database Connectivity Example</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            #wrapper
            {
                width:50%;
                margin:auto;
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

            h2
            {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">

            <h1>Database Connectivity Example</h1>

            <a href="index.php">Home</a> | 
            <a href="add-product.php">Add Product</a> | 
            <a href="view-products.php">View Products</a>

            <hr>

            <h2>View Products</h2>

                <?php
                    $host = 'localhost';        // database server name
                    $user = 'db_username';      // your database username
                    $pswd = 'db_password';      // your database password
                    $dbName = 'db_name';        // database name
                    $conn = mysqli_connect($host, $user, $pswd, $dbName);
                    if (empty($conn))
                    {
                        die("Connection failed: <br>" . mysqli_connect_error());
                    }
                    
                    $query = "select * from tblProducts";
                    
                    $result = mysqli_query($conn, $query);
                    
                    if (mysqli_num_rows($result) > 0) 
                        {
                            echo "<table id='products'><tr><th>Row #</th><th>Product Name</th><th>Product Price</th></tr>";
                            $i = 1;     // to print the # of each row
                            while ($row = mysqli_fetch_assoc($result))
                            {
                                echo "<tr><td>$i</td><td>" . $row['productName'] . "</td><td>" . $row['productPrice'] . "</td></tr>";
                                $i++;
                            }
                            echo "</table>";
                        }
                    else
                        {
                            echo "<h3>THe table is empty</h3>";
                        }
                        
                ?>
        </div>
    </body>
</html>
