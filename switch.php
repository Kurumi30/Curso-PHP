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
            $n = isset($_GET["num"]) ? $_GET["num"] : 0;
            $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;

            switch ($o) {
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = $n ^ 3;
                    break;
                case 3:
                    $r = sqrt($n); // $n ^ (1/2)
            }
            echo "O resultado da operação solicitada é $r";
        ?>
        <br>
        <a href="switch.html">Voltar</a>
    </div>
</body>
</html>