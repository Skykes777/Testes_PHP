<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <?php 
            $numero = $_REQUEST["numero"] ?? 0;
            echo "O número escolhido foi <strong>$numero</strong><br>O seu antecessor foi ".($numero-1)."<br>O sucessor é ".($numero+1);
        ?>
        <button onclick={javascript:history.go(-1)}>VOLTAR</button>
    </main>
</body>
</html>