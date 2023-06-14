<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Teste</title>
</head>
<body>
    <header>
        <h1>Calcular 2 números</h1>
    </header>
    <main>
        <?php 
            $n1 = $_GET['n1'] ?? 0;
            $n2 = $_REQUEST['n2'] ?? 0;
        ?>
        <form action="<?$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero1">Digite o 1° número</label>
            <input type="number" name="n1" id="n1" value="<?=$n1?>">
            <label for="numero2">Digite o 2° número</label>
            <input type="number" name="n2" id="n2" value="<?=$n2?>">
            <input type="submit" value="CALCULAR">
        </form>
    </main> 
    <section>
        <h2>Resultado da soma</h2>
        <?php 
            echo "A soma do número <strong>$n1</strong> com <strong>$n2</strong> é <strong>".$n1+$n2."</strong>.";
        ?>
    </section>
</body>
</html>