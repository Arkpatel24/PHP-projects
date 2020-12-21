<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Products Search</title>
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
                padding: 10px;
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
<h1>Search product </h1>
        

        <form action="productsearch1.php">
        <input type="text" name="search">
<input type="submit" value="search product" />
</form>
<?php

       if(isset($_REQUEST['result']))
{
if($_REQUEST['result'] == "success")
{
echo "Product found Successfully";
}
else if($_REQUEST['result'] == "fail")
{
echo "Something went wrong. Product Not found.";
}
}
        ?>
            
      
    </body>
</html>
