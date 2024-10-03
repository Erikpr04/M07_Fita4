<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<h1>COINCIDENCIES</h1>


<?php
session_start();
echo "<p><a href='ex42pagina1.php'>TORNAR</a></p>";


if (isset($_POST["frase2"])) {
    $_SESSION["frase2"] = $_POST["frase2"];
    $array1 = explode(" ", $_SESSION["frase1"]);
    $array2 = explode(" ", $_SESSION["frase2"]);
    $coincidencia = false;

    for($i = 0; $i < count($array1); $i++){
        if( in_array($array1[$i], $array2)){
            echo "la paraula $array1[$i] esta a les dues frases <br>";
            $coincidencia = true;
            break;
        }
    }
    if($coincidencia == false){
        echo "No hi ha cap coincidencia <br>";
    }
}
?>
    
</body>
</html>