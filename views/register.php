<html>
<head>
<title> </title>
</head>
<body>
<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name=post["username"];
		$password=post["password"];
		$password=post["passwordre"]
		
		echo $name;
		}

?>
</body>
</html>