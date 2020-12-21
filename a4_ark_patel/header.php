<!DOCTYPE html>

<html>
    <head>
        <style>
            body{
                background-color: lightblue;
            }
            * {
                box-sizing: border-box;
            }
            
            .logo{
                display : flex;
                margin-left: 550px;
               
            }
            .nav{
                float: left;
                 margin-left: 450px;
                 
            }
            .nav a{
                float: left;
                display: block;
                padding: 25px 18px;
                font-size: 20px;
                text-decoration: none;
                color: black;
            }
            
            .nav :hover{
                background-color: yellowgreen;
            }
            
            
        </style>
    </head>
    <body>
        
        <div class="logo">
        <center><h1>Brampton Book Store </h1></center>
        </div>
        <div class="nav">
            <a href="index.php" >Home</a>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
            <a href="addProduct.php">Add Products</a>
            <a href="viewproduct.php">View Products </a>
            <a href="productsearch.php">Search Product</a>
        </div>   
        <?php
            
        ?>
    </body>
</html>


