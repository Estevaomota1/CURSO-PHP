<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>ESTEVAO MOTA/2023 REFERENCIA DE VARIAVEIS </title>
</head>
<body>
<div>
    <?php

    /*A VARIAVEL 'B' TOMA O VALOR DE A QUANDO O B SOMA COM 5 ELE VIRA 8 AI O A VIRA 8 */
        $a = 3;
        $b = &$a;
        $b += 5;
        echo "A variavel A vale $a";
        echo "<br/>A variavel B vale $b";
    ?>
</div>
</body>
</html>
 