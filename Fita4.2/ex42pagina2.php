<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<h1>ENREGISTRA FRASE 2</h1>

<?php
session_start();
$_SESSION["frase1"] = $_POST["frase1"];

?>
<form action="ex42pagina3.php" method="POST">
    <input type="text" name="frase2" id="frase2">
    <input type="submit" name="" id="">
</form>

    
</body>
</html>