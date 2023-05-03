<html>
<head>
    <title>Boas Vindas</title>
</head>
<body>
<h1>Boas Vindas</h1>
<?php
    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];

    echo "<p> Olá $nome $sobrenome! Bem-vind@ ao meu site! </p>"
?>
</body>
</html>