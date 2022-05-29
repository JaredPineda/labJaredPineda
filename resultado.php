<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB1</title>
</head>
<body style="background-color: #DEA057">
<h1>RESULTADO:</h1>
<?php
    if (isset($_POST["laboratorio1"])) {
        $lab1=$_POST["laboratorio1"];
        $lab2=$_POST["laboratorio2"];
        $parcial=$_POST["parcial"];
        $resultado=($lab1*0.25)+($lab2*0.25)+($parcial*0.5);
        echo "<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$resultado</h1>";
    }
    ?>
          
        
</body>
</html>