<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Info</title>
</head>
<body>
    <?php
        echo "isso é um teste 2 a";
        echo "<br>";
        include 'Helpers.php';

        echo saudacao();

        $texto = "Isso é um texto dentro de variavel";

        echo resumirTexto($texto, 30);
    ?>

    <!-- continue com a aula 16 do curso unset  -->
</body>
</html>