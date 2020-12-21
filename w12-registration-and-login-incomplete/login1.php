<?php
    ob_start();
    session_start();
    
    // start the session
    require_once 'config.php';
    
    // read the values
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    // SQL query to select a row based on username
    $query = "Select * from userproducttbl where username = '$username';";

    // execute the query
    $result = mysqli_query($conn, $query);
    
    // check if a row was fetched
    if (mysqli_num_rows($result) == 1)
        {
            $row = mysqli_fetch_assoc($result);
            // read the row
            $hashed_password = $row['password'];
            // read the hashed password from the row
            
            if (password_verify($password, $hashed_password))
                    {
                        // create the session for the user
                        $_SESSION['username'] = $username;
                        // redirect to member's page
                        header('location:member.php');
                        ob_end_flush();
                        die();
                        
                    }                    
        }
    // otherwise redirect to login 
    pageheader('location:login.php?result=fail');
?>
