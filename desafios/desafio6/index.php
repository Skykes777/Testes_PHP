<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Anatomia da divisão</title>
</head>

<body>
    <header>
        <h1>Anatomia de uma divisão</h1>
    </header>
    <?php
    $dividendo = $_POST['dividendo'] ?? 0;
    $divisor = $_POST['divisor'] ?? 1;
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" min="0" id="idDividendo" value="<?= $dividendo ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" min="1" id="idDivisor" value="<?= $divisor ?>">
            <input type="submit" value="ANALISAR">
        </form>
    </main>
    <section>
        <h2>Estrutura da divisão</h2>
        <?php
        $quocieno = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
        ?>
        <table class="divisao">
            <tr>
                <td><?= $dividendo ?></td>
                <td><?= $divisor ?></td>
            </tr>
            <tr>
                <td><?= $resto ?></td>
                <td><?= $quocieno ?></td>
            </tr>
        </table>
    </section>
</body>

</html>