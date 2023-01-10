<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Curso de PHP</title>
</head>
<body>
    <div>
        <?php
            $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não informado]";
            $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
            $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Não informado]";
            $idade = date("Y") - $ano;
            echo "$nome é $sexo e tem $idade anos.";
        ?>
        <a href="main2.html">Voltar</a>
    </div>
</body>
</html>