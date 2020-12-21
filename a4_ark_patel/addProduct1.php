<?php
ob_start();
require_once 'config.php';
    
    $name = $_REQUEST['name'];
    $price = $_REQUEST['price'];
    
    $query = "SELECT * from productstbl where ProductName = '$name';";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) == 1){
       header("Location:addProduct.php?result=overwrite");
       if($c == true){
           $query = "Insert into productstbl(ProductName,ProductPrice)values('$name','$price');";
           $result = mysqli_query($conn, $query);
           
           if($result == 1){
               header("Location:addProduct.php?result=success");
           }
           else{
               header("Location:addProduct.php?result=fail");
           }
       }
    }
    else{
        $query = "Insert into productstbl(ProductName,ProductPrice)values('$name','$price');";
           $result = mysqli_query($conn, $query);
           
           if($result == 1){
               header("Location:addProduct.php?result=success");
           }
           else{
               header("Location:addProduct.php?result=fail");
           }
    }
