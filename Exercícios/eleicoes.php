<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Eleições</title>
</head>
<body>
    <div>
        <?php
            $ano = $_GET["an"];
            $idade = 2022 - $ano;
            echo "Quem nasceu em $ano tem idade de $idade anos.";
            $tipo = ($idade >= 18 && $idade < 65) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
            echo " Seu voto é $tipo.";
        ?>
    </div>
</body>
</html>