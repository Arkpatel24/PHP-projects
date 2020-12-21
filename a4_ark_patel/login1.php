<?php
    ob_start();
    session_start();
    require_once 'config.php';
    
    $username = $_POST['username'];
    $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $query = "Select * from userproducttbl where username = '$username' && password = '$hashed_password';";
    
    $result = mysqli_query($conn, $query);
    $num=mysqli_num_rows($result);
    
    if($num == 1)
    {
 
      header('Location:viewproduct.php'); 
    }
    else
    {
        
           header('Location:login.php?result=fail');
    }
    
