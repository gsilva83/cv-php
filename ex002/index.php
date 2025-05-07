<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O PHP por dentro - Aula 18</title>
</head>
<body>
    <?php
date_default_timezone_set('America/campo_grande'); // Define o fuso horário para Campo Grande, MS

    $nome = "Lucas";
    $idade = 20;
    $altura = 1.80;
    $casado = false;
    $filhos = null;
    
    echo "Meu nome é $nome, tenho $idade anos, minha altura é $altura m, sou casado? " . ($casado ? "Sim" : "Não") . ", e tenho filhos? " . ($filhos === null ? "Não" : "Sim") . ".";
    echo "<br>";

    echo "Hoje é dia " . date("d") . " do mês " . date("m") . " do ano " . date("Y") . " e a hora atual é " . date("H:i:s") . ".";
    ?>
</body>
</html>