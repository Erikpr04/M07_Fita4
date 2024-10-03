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

    <input type="submit" name="letter" id="letter" value ="a">
    <input type="submit" name="letter" id="letter" value ="b">
    <input type="submit" name="letter" id="letter" value ="c">
    <input type="submit" name="letter" id="letter" value ="d">
    <input type="submit" name="letter" id="letter" value ="e">
    <input type="submit" name="letter" id="letter" value ="f">
    <input type="submit" name="letter" id="letter" value ="g">
    <input type="submit" name="letter" id="letter" value ="h">
    <input type="submit" name="letter" id="letter" value ="i">
    <input type="submit" name="letter" id="letter" value ="j">
    <input type="submit" name="letter" id="letter" value ="k">
    <input type="submit" name="letter" id="letter" value ="l">
    <input type="submit" name="letter" id="letter" value ="m">
    <input type="submit" name="letter" id="letter" value ="n">
    <input type="submit" name="letter" id="letter" value ="o">
    <input type="submit" name="letter" id="letter" value ="p">
    <input type="submit" name="letter" id="letter" value ="q">
    <input type="submit" name="letter" id="letter" value ="r">
    <input type="submit" name="letter" id="letter" value ="s">
    <input type="submit" name="letter" id="letter" value ="t">
    <input type="submit" name="letter" id="letter" value ="u">
    <input type="submit" name="letter" id="letter" value ="v">
    <input type="submit" name="letter" id="letter" value ="w">
    <input type="submit" name="letter" id="letter" value ="x">
    <input type="submit" name="letter" id="letter" value ="y">
    <input type="submit" name="letter" id="letter" value ="z">
   
</form>
    
</body>
</html>