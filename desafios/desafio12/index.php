<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de tempo</title>
</head>
<body>
    <header>
        <h1>Calculadora de Tempo</h1>
    </header>
    <?php 
        $segundos = $_POST['segundos'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="idsegundos" value="<?=$segundos?>">
            <input type="submit" value="CALCULAR">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            $semanas = $segundos / 604800;
            $segundosR1 = $segundos % 604800;
            $dias = $segundosR1 / 86400;
            $segundosR2 = $segundosR1 % 86400;
            $horas = $segundosR2 / 3600;
            $segundosR3 = $segundosR2 % 3600;
            $minutos = $segundosR3 / 60;
            $segundosF = $segundosR3 % 60;

            echo "<p>Analisando o valor que você digitou, <strong>$segundos segundos</strong> equivalem a um total de:</p>";
            echo "<ul>
                <li>".(int)$semanas." semanas</li>
                <li>".(int)$dias." dias</li>
                <li>".(int)$horas." horas</li>
                <li>".(int)$minutos." minutos</li>
                <li>".(int)$segundosF." segundos</li>
                </ul>";
        ?>
    </section>
</body>
</html>