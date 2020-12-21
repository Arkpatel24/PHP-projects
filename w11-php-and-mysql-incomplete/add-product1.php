<?php
    $host = 'localhost';
    $username = 'pate1616_admin';
    $password = 'k?O])&ucq4_Z';
    $db_name = 'pate1616_mydb';
    
    $conn = mysqli_connect($host, $username, $password, $db_name);
    
    if(empty($conn))
    {
        die("Connection Failed:". mysqli_connect_error());
    }
    
    $productName= $_REQUEST['productName'];
    $productPrice= $_REQUEST['productPrice'];
    
    $query="insert into tblProducts (productName,productPrice) values ('$productName',$productPrice)";
    $result= mysqli_query($conn, $query);
    
    if($result > 0)
    {
        echo 'Product added';
    }
    else
    {
        echo 'Product not added';
    }
?>
