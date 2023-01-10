<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>iguais ou Idênticos?</title>
</head>
<body>
    <div>
        <?php
            $a = 3;
            $b = "3";
            $r = ($a === $b) ? "SIM" : "NÃO";
            echo "As variáveis A e B são iguais? $r";
        ?>
    </div>
</body>
</html>