<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
</head>
<body>
<?php
$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];

$operacao = $_GET['operacoes'];

if($operacao == '1'){
    $resultado = $valor1 + $valor2;
}
elseif($operacao == '2'){
    $resultado = $valor1 - $valor2;
}
elseif($operacao == '3'){
    $resultado = $valor1 * $valor2;
}
elseif($operacao == '4'){
    $resultado = $valor1 / $valor2;
}
else{
    echo "Escolha uma operação";
    exit();
}

echo "O resultado de $valor1 $operacao $valor2 é $resultado";
?>
</body>
</html>

