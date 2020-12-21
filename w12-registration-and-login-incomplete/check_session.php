<?php
    // write PHP code that checks if a session exists
     session_start();
    // if the session doesn't exist
    if (!isset($_SESSION['username']))
        {
            // redirect back to login
            pageheader('location:login.php');
        }