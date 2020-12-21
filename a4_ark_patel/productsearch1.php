<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Products</title>
        <style> 
            table
{
                border-collapse: collapse;
                width: 40%;
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
 <?php require_once 'header.php';?>
<h1>Product Search</h1>
        
   
       
        <br>

        
        <input type="text" name="search">
<input type="submit" value="search product" />
<h2>Available Products</h2>
        <table id="products">
            <tr>
                <th>S. No.</th>
                <th>Product Name</th>
                <th>Product Price</th>
            </tr>
            
            <?php

ob_start();

    $host = 'localhost';
    $username = 'pate1616_admin';
    $password = 'k?O])&ucq4_Z';
    $db_name = 'pate1616_mydb';
    
$conn = mysqli_connect($host, $username, $password, $db_name);



// Verify if connection wasn't established
if(empty($conn))
{
die("Connection failed:" .mysqli_connect_error());
}

                // query to select data from table

$search = $_REQUEST['search'];
$query ="select * from productstbl where productName = '$search' ;";
                
                // execute the query
$result =mysqli_query($conn, $query);
                
                // check if some rows were fetched

if(mysqli_num_rows($result) > 0) {
         
$i= 1; 

while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>$i</td>";
echo "<td>" . $row['ProductName'] . "</td>";
echo "<td>" . $row['ProductPrice'] . "</td>";

echo "</tr>";
$i++;
}
       }


// to print the S. No. of each row

                 // loop through all the rows of the fetched data
if($search == "")
{
$query1 ="select * from productstbl ";
                
                // execute the query
$result =mysqli_query($conn, $query1);
                
                // check if some rows were fetched

if(mysqli_num_rows($result) > 0) {
         
$i= 1; 

while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>$i</td>";
echo "<td>" . $row['ProductName'] . "</td>";
echo "<td>" . $row['ProductPrice'] . "</td>";
echo "</tr>";
$i++;
}
       }
}


            ?>
        </table>
    </body>
</html>
