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
            $inicio = isset($_GET["numeroi"]) ? $_GET["numeroi"] : 0;
            $fim = isset($_GET["numerof"]) ? $_GET["numerof"] : 0;
            $passo = isset($_GET["passo"]) ? $_GET["passo"] : 1;

            if ($inicio < $fim) {
                while ($inicio <= $fim) {
                    echo "$inicio ";
                    $inicio += $passo;
                }
            } elseif ($inicio > $fim){
                while ($inicio >= $fim) {
                    echo "$inicio ";
                    $inicio -= $passo;
                }
            } else {
                echo "O início e o fim devem ter valores diferentes!";
            }
        ?>
        <br><br>
        <a href="contadorPerso.php" class="botao">Voltar</a>
    </div>
</body>
</html>