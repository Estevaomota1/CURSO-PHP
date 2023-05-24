<!DOCTYPE html>
<html>
 <head>

  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="Utf-8">
  <title>Estevao mota </title>

</head>
<body>
<div>
   <?php
  $a = isset ($get["ano"]? $_GET["ano"]):1900;
  $i =date("Y") - $a;
  echo "Voce nasceu em ano $a e tera $i anos";
  
  if ($i <16 ) {

    $tipoVoto ="Nao vota ";
    }
   
   
 elseif(($i >= 16 e $i <18) ||($i>65)) {
    $tipoVoto = "Voto Opcional";
   }

 else {
    $tipoVoto = "Voto obrigatorio";
      }

 
?>

</div>
</body>
 </head>
