<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $seg = $_GET['seg'] ?? 0;
    ?>
    
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$seg?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <?php
        $sobra = $seg;
        $sem = (int) ($sobra / 604800);
        $sobra = $sobra % 604800;
        $dia = (int) ($sobra / 86400);
        $sobra = $sobra % 86400;
        $hora = (int) ($sobra / 3600);
        $sobra = $sobra % 3600;
        $min = (int) ($sobra / 60);
        $sobra = $sobra % 60;
        $resto = $sobra;
    ?>

    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($seg, 0, ",",".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><strong><?=$sem?></strong> semanas</li>
            <li><strong><?=$dia?></strong> dias</li>
            <li><strong><?=$hora?></strong> horas</li>
            <li><strong><?=$min?></strong> minutos</li>
            <li><strong><?=$resto?></strong> segundos</li>
        </ul>
    </section>

</body>
</html>