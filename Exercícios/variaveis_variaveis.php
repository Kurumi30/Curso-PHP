<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Variáveis de variáveis no PHP</title>
</head>
<body>
    <div>
        <?php
            $x = "abc";
            $$x = "def";
            echo "O conteúdo da variável X é $x";
            echo "<br>A variável ABC criada recebeu o valor $abc";
        ?>
    </div>
</body>
</html>