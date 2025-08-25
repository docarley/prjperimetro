
<?php

$lado1 = filter_input(INPUT_GET, "lado-1", FILTER_VALIDATE_FLOAT);  

$lado2 = filter_input(INPUT_GET, "lado-2", FILTER_VALIDATE_FLOAT);

$lado3 = filter_input(INPUT_GET, "lado-3", FILTER_VALIDATE_FLOAT);

if ($lado1==false || $lado2==false || $lado3==false) {
    $mensagem = "ERRO: Valores inválidos!!!";
} else {
    $perimetro = $lado1 + $lado2 + $lado3;
    $mensagem =  "<p> lado 1: => " . $_GET["lado-1"] . "</p>" .
                 "<p> lado 2: => " . $_GET["lado-2"] . "</p>" .
                 "<p> lado 3: => " . $_GET["lado-3"] . "</p>" .

                 "<p> O valor do perímetro é: " . $perimetro;
}

?>
 
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Perímetro</title>
   <link rel="stylesheet" href="./../css/style.css">
</head>
<body>
    <h1>Resultado do Perímetro do Triângulo</h1>
    <div id="resultado">

       
        
            <?= $mensagem; ?>
        </p>
    </div>
</body>
</html>
