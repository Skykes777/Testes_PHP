<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <main>
        <?php 
            $nome = $_POST['nome'] ?? null;
            $sobrenome = $_POST['sobrenome'] ?? null;
            echo "<p>Sejá bem vindo ao site <strong>$nome $sobrenome</strong>!</p>";
        ?>
        <button onclick={javascript:history.go(-1)}>VOLTAR</button>
    </main>
</body>
</html>