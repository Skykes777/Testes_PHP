<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de idade</title>
</head>
<body>
    <header>
        <h1>Calculando sua idade</h1>
    </header>
    <?php 
        $anoArtual = date('Y');
        $anoN = $_POST['anoNascimento'] ?? 2000;
        $anoP = $_POST['anoPesquisa'] ?? $anoArtual;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="anoNascimento">Em que ano você nasceu?</label>
            <input type="number" name="anoNascimento" id="idAnoN" value="<?=$anoN?>">
            <label for="anoPesquisa">Quer saber sua idade em que ano? (atualmente estamos em <?=$anoArtual?>)</label>
            <input type="number" name="anoPesquisa" id="idAnoP" value="<?=$anoP?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $idade = $anoP - $anoN;
            echo "<p>Quem nasceu em $anoN vai ter <strong>$idade anos</strong> em $anoP!</p>";
        ?>
    </section>
</body>
</html>