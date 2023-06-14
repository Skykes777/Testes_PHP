<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado da conversão</title>
</head>

<body>
    <header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <main>
        <?php 
            $cotação = 5.17;
            $real = $_REQUEST['numero'] ?? 0;
            $valorEmDolar = $real / $cotação;


            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus ".numfmt_format_currency($padrao, $real, "BRL"). " equivalem a <strong>". numfmt_format_currency($padrao, $valorEmDolar, "USD")."</strong></p>";
        ?>
        <button onclick={javascript:history.go(-1)}>VOLTAR</button>
    </main>
</body>
</html>