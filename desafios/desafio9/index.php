<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Média Aritimética</title>
</head>
<body>
    <header>
        <h1>Médias Aritiméticas</h1>
    </header>
    <?php 
        $valor1 = $_REQUEST['1valor'] ?? 0;
        $peso1 = $_GET['1peso'] ?? 1;
        $valor2 = $_REQUEST['2valor'] ?? 0;
        $peso2 = $_GET['2peso'] ?? 1;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="1valor">1° Valor</label>
            <input type="number" name="1valor" id="1valor" value="<?=$valor1?>"> <!--1 VALOR-->
            <label for="1peso">1° Peso</label>
            <input type="number" name="1peso" id="1peso" value="<?=$peso1?>"> <!--1 PESO-->
            <label for="2valor">2° Valor</label>
            <input type="number" name="2valor" id="2valor" value="<?=$valor2?>"> <!--2 VALOR-->
            <label for="2peso">2° Peso</label>
            <input type="number" name="2peso" id="2peso" value="<?=$peso2?>"> <!--2 PESO-->
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Calculo das Médias</h2>
        <?php 
            $mediaAritimeticaSimples = number_format(($valor1 + $valor2) / 2, 2, ',', '.');
            $mediaAritimeticaPonderada = number_format(($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2), 2, ',', '.');

            echo "<p>Analisando os valores $valor1 e $valor2:</p>";
            echo "<ul><li>A <strong>média Aritimética Simples</strong> entre os valores é igual a <strong>$mediaAritimeticaSimples</strong></li><li>A <strong>média Aritimética Ponderada</strong> com pessos $peso1 e $peso2 é igual a <strong>$mediaAritimeticaPonderada</strong></li></ul>";
        ?>
    </section>
</body>
</html>