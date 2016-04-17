<?php

    // configuration
    require("../includes/config.php"); 

    // render portfolio
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {
    render("quote_form.php");
    }
    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        
        $name=$_POST["stockname"];
        $stock = lookup($name);
        if ($stock === false)
        {
            apologize("Entered stock symbol was invalid.");
        }
        else
        {
        render("quote_reply.php",["title" => "Quote", "symbol" => $stock["symbol"], "name" => $stock["name"], "price" => $stock["price"]]);
        }
    }
    
    
?>