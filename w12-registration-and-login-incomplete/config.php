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
