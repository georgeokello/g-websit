<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>meetingPoint.Sell</title>
        <script type="text/javascript">
             function j(){      document.getElementById('submit').style.display="block";
            }
             
        </script>
    </head>
    <body>
        <header>
            <h1><span style="color:red">m</span>eeting<span style="color:red">P</span>oint.com</h1>
            <ul> 
                <li><a href="sell.php">Home Page</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </header>
        <div class="container">
            <h2>A website that helps people sell and buy products nearby</h2>
        </div>
        <div class="sell">
            <form action="sellForm.php" method="post">
                <input accept="image/x-png, image/gif, image/jpeg" required="" type="file" name="photos[]" id="photos" multiple=""><br>
                <textarea name="description">decription of the product</textarea><br/>
                <input type="text" name="price" placeholder="price"><br/>
                <input type="submit" value="Sell" name="sell-btn">
            </form>
        </div>
        <hr/>
        <h3>Products Available for SALE!!</h3>
        <hr>
        <center>
        <div class="products">
            <?php
                //connect to the database 
            mysql_connect("localhost","root","");
            mysql_select_db("sell");
            
            //retreive data from the database
            $result = mysql_query("select * from seller") or die(mysql_error());
            
            if(mysql_num_rows($result) > 0){
                while($rows=mysql_fetch_assoc($result)){
                    echo "id:".
                        $rows["id_no"]."<br/>".
                        "Date:".
                        date(" jS \of F Y ")."<br/>". "image_of_product:"."<br/>".
                        $rows["photodb"]."<br/>". "description:"."<br/>".
                        $rows["descriptiondb"]."<br/>". "price:"."<br/>".
                        $rows["pricedb"]."<br/><button onclick=".'j()'.">Buy</button>"."<br/>".
                       "<hr><br/>";
                    
                }
            }
            ?>
        </div>
             </center>
        <footer>meetingPoint, get ur best product cheaply and quicker</footer>
    </body>
</html>