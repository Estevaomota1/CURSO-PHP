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



$nota1 = 7;


$nota2 = 8;


$nota3 = 6;




$media = ($nota1 + $nota2 + $nota3) / 3;


if ($media >= 5) {
    
   
echo "Aluno aprovado com média de $media";
} 

else {
    
   
echo "Aluno reprovado com média de $media";
}
?>
</div>
</body>
 </head>
