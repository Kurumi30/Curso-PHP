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
            $i = 1;
            while ($i <= 5) {
                $v = "num" . $i;
                $url = "v" . $i;
                $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
                $i++;
            }
            echo "$num1 $num2 $num3 $num4 $num5";

            /*
            $i = 1;
            while ($i <= 5) {
                $v = "num" . $i;
                echo "valor $i : " . $$v . "<br>";
                $i++;
            }
            */
            
        ?>
    </div>
</body>
</html>