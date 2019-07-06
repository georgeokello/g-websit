<?php

if (isset($_POST['sell-btn'])){
    
    //connect to the database
    mysql_connect("localhost","root", "");
    mysql_select_db("sell");
    
    //get input from the user
    $photo = $_POST['photos'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    
    //check for empty feilds
   
        $result = mysql_query("insert into seller(photodb,descriptiondb,pricedb) values('$photo','$description','$price')");
    if($result){
        header("location:sell.php?Done!!");
    
        
    }
}