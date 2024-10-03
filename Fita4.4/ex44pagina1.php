<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php
session_start();


if (isset($_GET["letter"])){
    $_SESSION["letter"] .= $_GET["letter"];
    echo $_SESSION["letter"];

}


?>

<h1>Maquina de escriure</h1>



<form action="ex43pagina1.php" method="GET">

    <input type="textarea" name="textarea" id="textarea" >
    <input type="submit" name="" id="">
   
</form>
    
</body>
</html>