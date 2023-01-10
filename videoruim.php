<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <form action="videoruim1.php" method="get">
            <?php
                $c = 1;
                while ($c <= 5) {
                 echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'><br>";
                 $c++;
                }
            ?>
            <input type="submit" value="Enviar" class="botao">
        </form>
    </div>
</body>
</html>