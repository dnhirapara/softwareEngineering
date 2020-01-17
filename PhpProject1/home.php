<?php
    session_start();
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "trial";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    
    $emaildb="a@gmail.com";
    if($_POST["email"]!=$emaildb){
    /* @var $_POST type */
    echo $_POST["email"];
    } else {
        $errors="you have alrady account";
        header("location: index.php?msg=$errors");
    }
?>
<html
    <head>
        <link rel="stylesheet" type="text/css" href="home_page.css">
    </head>
    <body>
        
    </body>
</html>

