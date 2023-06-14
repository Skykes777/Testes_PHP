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
        <h1>Conversor de Moedas v2.0</h1>
    </header>
    <main>
        <?php
            // cotação da API do Banco Central
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            // converção do valor em real para dolar baseado na cotação
            $real = $_REQUEST['numero'] ?? 0;
            $valorEmDolar = $real / $cotacao;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus ".numfmt_format_currency($padrao, $real, "BRL"). " equivalem a <strong>". numfmt_format_currency($padrao, $valorEmDolar, "USD")."</strong></p>";
        ?>
        <button onclick={javascript:history.go(-1)}>VOLTAR</button>
    </main>
</body>
</html>