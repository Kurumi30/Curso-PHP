<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $est = isset($_GET["estado"]) ? $_GET["estado"] : undefined;

            switch ($est) {
                case 'Rsudeste':
                    echo "Você mora na <span class='foco'>Região Sudeste</span>";
                    break;
                case 'Rnorte':
                    echo "Você mora na <span class='foco'>Região Norte</span>";
                    break;
                case 'Rsul':
                    echo "Você mora na <span class='foco'>Região Sul</span>";
                    break;
                case 'Rnordeste':
                    echo "Você mora na <span class='foco'>Região Nordeste</span>";
                    break;
                case 'Rcentoeste':
                    echo "Você mora na <span class='foco'>Região Centro-Oeste</span>";
            }
        ?>
        <br><br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>