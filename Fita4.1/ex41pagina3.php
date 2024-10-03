<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<h1>ENDEVINA EL NOMBRE</h1>

<?php
session_start();



if (isset($_POST["endevina"])) {
    $_SESSION["endevina"] = $_POST["endevina"];

    if ($_POST["endevina"] == $_SESSION["ocult"]) {
        echo "HAS ACERTAT";
        echo "<p><a href='ex41pagina1.php'>TORNAR</a></p>";
    }else{
        if ($_POST["endevina"] > $_SESSION["ocult"]) {
            echo "ENDEVINA ES MAJOR QUE OCULT";
        } else if ($_POST["endevina"] < $_SESSION["ocult"]){
            echo "ENDEVINA ES MAJOR QUE OCULT";
        }
        echo "<form action='ex41pagina3.php' method='POST'>";
        echo "<input type='number' name='endevina' id='num'>";
        echo "<input type='submit' name='' id=''>";
        echo "</form>";

    }

        

    


}else{



echo "<form action='ex41pagina3.php' method='POST'>";
echo "<input type='number' name='endevina' id='num'>";
echo "<input type='submit' name='' id=''>";
echo "</form>";

}
?>
    
</body>
</html>