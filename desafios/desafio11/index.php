<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajuste de preços</title>
</head>

<body>
    <header>
        <h1>Reajustador de preços</h1>
    </header>
    <?php
    $percentual = $_GET['reajuste'] ?? 0;
    $preco = $_REQUEST['preco'] ?? 0;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do produto (R$)</label>

            <input type="number" name="preco" id="odpreco" min="0.10" step="0.01" value="<?= $preco ?>">

            <label for="porcentagem">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>

            <input type="range" name="reajuste" id="idreajuste" min="0" max="100" oninput="mudaValor()" step="1" value="<?=$percentual?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        $precoReajuste = $preco + ($preco * ($percentual / 100));
        echo "O produto que custava " . numfmt_format_currency($padrao, $preco, "BRL") . ", com <strong>$percentual% de aumento</strong> vai passar a custar <strong>" . numfmt_format_currency($padrao, $precoReajuste, "BRL") . "</strong> a partir de agora.";
        ?>
    </section>
    <script>
        const mudaValor = () => p.innerText = idreajuste.value;
    </script>
</body>

</html>