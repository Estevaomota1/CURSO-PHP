<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8">
    <title>Estevao Augusto Mota dos santos </title>
</head>
<body>
<div>
    <?php

// Defina a contagem inicial do contador
$count = 0;

// Verifique se o contador personalizado foi enviado via formulário POST
if(isset($_POST['custom_count'])) {
    // Atualize o contador com o valor personalizado
    $count = intval($_POST['custom_count']);
}

// Incremente o contador
$count++;

// Imprima o valor do contador
echo "Contador: " . $count . "<br><br>";

?>

<form method="post">
    <label for="custom_count">Personalize o contador:</label>
    <input type="number" name="custom_count" id="custom_count" value="<?php echo $count; ?>">
    <button type="submit">Atualizar</button>
</form>

</div>
</body>
</html>