<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body
                {
                    background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2-xskOLmsF2k1X0d0g_myysYAfXAXNiaGT6nbcrY2VTEhSgLX");
                }
            
            .div1{
                float:left;
                width: 40%;
                background-color: #f1f1f1;
                height: 175px;
                margin-left: 0px;
                margin-right: 0px;
                margin-bottom:10px;
                margin-top: 0px;
            }
            .div2{
                float:left;
                width: 15%;
                background-color: #f1f1f1;
                height: 30px;
                margin-left: 150px;
                margin-right: 150px;
                margin-bottom: 0px;
            }
            .logo{
                 float: left;
                width: 40%;
                height: 30;
                margin-left: 150px;
                margin-bottom: 10px;
                margin-top: 60px;
            }
            .img1{
                width: 12%;
                height: auto;
                margin: 20px;
            }
            .img2{
                width: 14%;
                height: auto;
                margin: 20px;
            }
            .img3{
                width: 16%;
                height: auto;
                margin: 20px;
            }
            .img4{
                width: 18%;
                height: auto;
                margin: 20px;
            }
            .img5{
                margin-bottom: 130px;  
            }
            .img6{
                width: 14%;
                height: auto;
                margin-bottom: 80px;
            }
            .img7{
                 width: 14%;
                height: auto;
                margin-bottom: 90px;
            }
            h1{
                color: white;
                margin-left: 100px;
                margin-right: 100px;
            }
        </style>
    <body>
        <div>
            <img class="logo" src="logo-en.jpg" width="455px" height="350px">
            <h1>Your Order is: </h1>
            <?php 
            $num_coffee = $_POST['num_coffee'];
            $size = $_POST['size'];
            $num_sugar= $_POST['num_sugar'];
            $num_cream= $_POST['num_cream'];
            $order=$_POST['order'];
       
            if(isset($order))
            
                if($num_coffee <= 0)
                {
                    exit();
                }
                else
                {
                  
            
            for($i = 1; $i <= $num_coffee; $i++)
            
            { ?>
            <div class="div1">
                <?php 
                    if($size == "Small"){ ?>
                        <img src='cup.jpg' alt='cup' class='img1'>
                    <?php    
                    }
                    else if($size == "Medium"){ ?>
                        <img src='cup.jpg' alt='cup' class='img2'>
                    <?php    
                    }
                    else if($size == "Large"){ ?>
                        <img src='cup.jpg' alt='cup' class='img3'>
                    <?php      
                    }
                    else if($size == "Extra-Large"){ ?>
                        <img src='cup.jpg' alt='cup' class='img4'>
                    <?php    
                    }
                    if($num_sugar>0){?>
                        <img src='plus.jpg' alt='plus' class='img5'>
                    <?php
                    }
                    for($j=0;$j<$num_sugar;$j++){?> 
                        <img src='sugar.jpg' alt='sugar' class='img6'>
                    <?php 
                    }
                    if($num_cream>0){
                        ?>
                        <img src='plus.jpg' alt='plus' class='img5'>
                    <?php
                    }
                    for($j=0;$j<$num_cream;$j++){?> 
                        <img src='cream.jpg' alt='cream' class='img7'>
                    <?php 
                    }
                    ?>
            </div> 
            
                    <?php
                }
                    $cost = 0;
                    $Sizecost = 0;
                    $Sugarcost = 0;
                    $creamcost = 0;
                    $totalcost = 0;
                    
                    if($size == "Small"){
                        $Sizecost = 1.50;
                    }
                    if($size == "Medium"){
                        $Sizecost = 1.70;
                    }
                    if($size == "Large"){
                        $Sizecost = 1.90;
                    }
                    if($size == "Extra-Large"){
                        $Sizecost = 2.10;
                    }
                    for($j=0;$j<$num_sugar;$j++){
                        $Sugarcost = $Sugarcost + 0.20;
                    }
                    for($j=0;$j<$num_cream;$j++){
                        $creamcost = $creamcost + 0.40;
                    }
                    
                    $cost = ($Sizecost + $Sugarcost + $creamcost);
                    $totalcost = ($cost * $num_coffee) + $cost * 0.13;
                    $totalcost = "$" . number_format($totalcost, 2)
                    ?>
                        
            <div class='div2'><?php } echo "Total cost is: $cost x $num_coffee + tax = $totalcost" ?></div>
                    
        </div>
    </body>
</html>

