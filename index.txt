<!doctype html>
<html>
    <head>
        <title> Time Horton Order</title>
        <style>
            body
                    {
                        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2-xskOLmsF2k1X0d0g_myysYAfXAXNiaGT6nbcrY2VTEhSgLX");
                    }
            
            section
            {
                display: flex;
                justify-content: center;
            }
            .img
            {
                float: left;
                width: 30%;
                height: 300px;
                margin-bottom: 40px;
                margin-top: 40px;
            }
            .content
            {
                float: left;
                width: 40%;
                background-color: #f1f1f1;
                height: 350px;
                margin-bottom: 40px;
                margin-top: 40px;
            }
        </style>
    </head>
    <body>
        <section>
        <div class="img"><img src="logo-en.jpg" width="455px" height="350px"></img></div>
        <div class="content">
        <form action="order.php" method="post">
            <center>
            <h1>WELCOME TO TIM HORTON'S !</h1>
            <h2>Place your order here</h2>
            Number of coffee's:<input type="number" name="num_coffee"><br><br>
            Size:<select name="size">
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
                <option value="Extra-Large">Extra-Large</option>
                </select><br><br>
            How many creams?<input type="number" name="num_cream"><br><br>
            How many sugar?<input type="number" name="num_sugar"><br><br>
            <input type="submit" value="order coffee" name="order">
            </center>
        </form>
        </div>
        </section>
    </body>
</html>

