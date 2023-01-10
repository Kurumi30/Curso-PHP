<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <form action="contadorPerso1.php" method="get">
            <?php
                echo "Início: <input type='number' name='numeroi'><br>";
                echo "Fim: <input type='number' name='numerof'><br>";
                echo "Incremento: <select name='passo'>
                    <option value='1'>1</option>
                    <option value='2'>2</option>
                    <option value='3'>3</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                </select><br>";
            ?>
            <br>
            <input type="submit" value="Calcular" class="botao">
        </form>
    </div>
</body>
</html>