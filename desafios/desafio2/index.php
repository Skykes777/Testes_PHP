<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Números aleatórios</title>
</head>

<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <section>
        <p>Gerando um número aleatório entre 0 e 100</p>
        <?php
        $randNums = rand(0, 100);
        echo "O valor gerado foi <strong>$randNums</strong>";
        ?>
        <button onclick={window.location.reload(true)}>Gerar Outro</button>
    </section>
</body>

</html>