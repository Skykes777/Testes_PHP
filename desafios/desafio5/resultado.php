<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado da análise</title>
</head>
<body>
    <header>
        <h1>Analisador de Número Real</h1>
    </header>
    <main>
        <?php
            $numero = $_REQUEST['numeroR'] ?? 0;
            $numInteiro = (int) $numero;
            $numFloat = $numero - $numInteiro;

            echo "<p>Analisando o número <strong>".number_format($numero, 3, ',', '.'). "</strong> informado pelo usuario:</p>";
            echo "<ul>
                <li>A parte inteira do número é <strong>".number_format($numInteiro, 0 , ',', '.')."</strong></li>
                <li>A parte fracionaria do número é <strong>". number_format($numFloat, 3, ',', '.')."</strong></li>
            </ul>";
        ?>
        <button onclick={javascript:history.go(-1)}>VOLTAR</button>
    </main>
</body>
</html>