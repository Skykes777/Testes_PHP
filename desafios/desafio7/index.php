<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salario mínimo</title>
</head>

<body>
    <header>
        <h1>Informe seu salário</h1>
    </header>
    <?php 
        $salario = $_GET['salario'] ?? 0;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="idSalario" step="0.01" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="CALCULAR">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $quantS = intdiv($salario, 1380);
            $resto = $salario % 1380;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Quem recebe um salário de <strong>". numfmt_format_currency($padrao, $salario, 'BRL') ."</strong> ganha <strong>$quantS</strong> salários minimos + <strong>".numfmt_format_currency($padrao, $resto, "BRL")."</strong>";
        ?>
    </section>
</body>

</html>