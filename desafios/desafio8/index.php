<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raizes dos números</title>
</head>
<body>
    <header>
        <h1>Informe um número</h1>
    </header>
    <?php
        $num = $_POST['numero'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post"> 
            <label for="numero">Número</label>
            <input type="number" name="numero" id="idnumero" value="<?=$num?>">
            <input type="submit" value="CALCULAR RAÍZES">
        </form>
    </main>
    <section>
        <h2>Resulta do Final</h2>
        <?php 
            $raizQ = number_format(sqrt($num), 2, ',', '.');
            $raizC = number_format(pow($num, 1 / 3), 2, ',', '.');
            echo "Analisando o  <strong>número $num</strong>, temos:";
            echo "<ul><li>A sua raiz quadrada é <strong>$raizQ</strong></li><li>A sua raiz cúbica é <strong>$raizC</strong></li></ul>";
        ?>
    </section>
</body>
</html>