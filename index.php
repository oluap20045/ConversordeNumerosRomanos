<?php
include_once 'conversor.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <fieldset><legend>Conversor</legend>
        <label for="inumero">Numero a ser Convertido: </label><input type="number" name="numero" id="inumero" max=3999>
        <input type="submit" value="Converter">
        </fieldset>
    </form>
    <br>
    Resultado: <span id="result">
        <?php 
        $numero = filter_input(INPUT_GET, 'numero');
        $resultado = nr_romano($numero);
        echo ($resultado?$resultado:"Digite um número");
        ?></span>
</body>
</html>