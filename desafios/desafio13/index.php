<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Caixa eletrônico</title>
</head>
<body>
    <header>
        <h1>Caixa Eletrônico</h1>
    </header>
    <?php 
        $valor = $_GET['valor'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="idvalor" step="5" value="<?=$valor?>">
            <p>*Notas disponíveis: 100, 50, 10, 5</p>
            <input type="submit" value="SACAR">
        </form>
    </main>
    <section>
        <?php
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            echo "<h2>Saque de ". numfmt_format_currency($padrao, $valor, "BRL") ." realizado</h2>";
            $nota100 = 0;
            $nota50 = 0;
            $nota10 = 0;
            $nota5 = 0;

            while ($valor > 0) {
                if ($valor >= 100) {
                    $valor -= 100;
                    $nota100++;
                } else if ($valor >= 50) {
                    $valor -= 50;
                    $nota50++;
                } else if ($valor >= 10) {
                    $valor -= 10;
                    $nota10++;
                } else {
                    $valor -= 5;
                    $nota5++;
                }
            }

            echo 'O caixa eletrônico vai te entregar as seguintes notas:';
            echo "<ul>
                    <li>Notas 100: $nota100</li>
                    <li>Notas 50: $nota50</li>
                    <li>Notas 10: $nota10</li>
                    <li>Notas 5: $nota5</li>
                </ul>";
        ?>
    </section>
</body>
</html>