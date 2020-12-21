<!DOCTYPE html>

<html>
    <head>
        <title>Add Product Page</title>
        <style>
            .pro
            {
                width: 100px;
                height: 10px;
                margin-left: 350px;
            }
            #msg
            {
                width:40%;
                margin:auto;
            }
        </style>
    </head>
    <body>
        <?php
            require_once 'header.php';
        ?>
        <div class="pro">
        <form action="addProduct1.php" method="post">
            <p> Product Name </p>
            <input type="text" name="name" required>
            <p> Product Price </p>
            <input type="text" name="price" required><br>
             <input type="submit" value="Add Product" />
        </form>
        </div>
        <?php
        if($_REQUEST['result'] == overwrite){
           $message = "Product already exists. You want to overwrite.";
            echo "<script type='text/javascript'>$c = confirm('$message');</script>";
        }
        elseif($_REQUEST['result'] == success){
            echo "Product is added to the list.";
        }
        elseif($_REQUEST['result'] == fail){
            echo "Unable to enter the product in the list.";
        }
        ?>
    </body>
</html>

