<!DOCTYPE html>
<html>
 <head>

  <link rel="stylesheet" href="_css/estilo">
  <meta charset="Utf-8">
  <title>Estevao mota </title>

</head>
<body>
<div>
   <?php
  $a = isset ($get["ano"]? $_GET["ano"]):1900;
  $i =date("Y") - $a;

  echo "Voce nasceu em ano $a e tera $i anos";
  if($i >=18) {
   $v ="Ja pode voltar";
   $d = "Ja pode dirigir";

  } 
  else {

    $v ="Nao pode votar";
    $d ="Nao pode dirigir";
  }
  echo "com essa idade voce $v e tambem $d";
?>
</div>


</body>




 </head>
