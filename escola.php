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
            $d = isset($_GET["ds"]) ? $_GET["ds"] : 0;

            switch ($d) {
                case 1:
                case 7:
                    echo "Descanse, pequeno gafanhoto! ;)";
                    break;
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estudar! :)";
                    break;
                default:
                    echo "Dia da semana inválido!";
            }
        ?>
        <br><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>