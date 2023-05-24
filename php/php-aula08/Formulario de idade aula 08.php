<!DOCTYPE >
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de idade </title>
</head>
<body>
 <div>
    <form method="get" action="02idade.php">
        Nome: <input type="text" name="nome"/> <br/>
        Ano de nascimento: <input type="number" name="ano"/><br/>
        <fieldset><legend>Sexo</legend></legend>
            <input type="radio" name="sexo" id="masc"/>
            <label for="masc">Masculino</label><br/>
            <input type="radio" name="sexo" id="masc"/>
            <label for="masc">Feminino</label><br/>
        </fieldset><br/>
        <input type="subimit" value="Enviar"/>
    </form>
 </div>
    
</body>
</html>