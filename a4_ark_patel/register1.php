<?php
    ob_start();
    require_once 'config.php';
    $username = $_REQUEST['username'];
    $hashed_password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
    
    $query1 = "Select username from userproducttbl where username = '$username';";
    $result = mysqli_query($conn, $query1);
    
   
    if (mysqli_num_rows($result) == 1)
        {
            
            header('Location:register.php?result=userexists');
        }
   else
     {
    
            $query = "Insert into userproducttbl(username,password)values('$username','$hashed_password');";
            $result = mysqli_query($conn, $query);
            if($result == 1)
                {
                
                    header('Location:register.php?result=success');
                    
                }
            else
                {
                header('Location:register.php?result=fail');
                }
        }
        
