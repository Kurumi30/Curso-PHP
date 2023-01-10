<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Situação dos alunos</title>
    <style>
        input#voltar {
            position: relative;
            top: 10px;
            background-color: rgb(31, 147, 214);
            box-shadow: gray 2px 2px 2px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $nota1 = isset($_GET["nota1"]) ? $_GET["nota1"] : 0;
            $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"] : 0;
            $media = ($nota1 + $nota2) / 2;
            echo "A média entre $nota1 e $nota2 é $media <br>";
            if ($media < 5) {
                $situacao = "REPROVADO";
            } elseif ($media >= 5 && $media < 7) {
                $situacao = "EM RECUPERAÇÃO";
            } else {
                $situacao = "APROVADO";
            }
            echo "A situação do aluno é $situacao"
        ?>
        <a href="index-exe.html"><input type="submit" value="Voltar" id="voltar"></a>
    </div>
</body>
</html>