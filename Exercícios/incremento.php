<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Incremento</title>
</head>
<body>
    <div>
        <?php
        /* Esse exercício pretende demonstrar 
        o uso de operadores
        de incremento e decremento. */
            $atual = $_GET["aa"]; # Essa linha vai pegar o ano na URL
            echo "O ano atual é $atual e o ano anterior é " . --$atual;
        ?>
    </div>
</body>
</html>