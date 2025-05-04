<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $numero = $_GET['numero'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section>
        <h2>Resutado Final</h2>
        <p>Analisando o <strong>número <?=$numero?></strong> temos:</p>
        <?php
            $raiz2 = sqrt($numero);
            $raiz3 = $numero ** (1/3);
        ?>
        <ul>
            <li>A sua raiz quadrada é <strong><?=number_format($raiz2, 2, ",",".")?></strong></li>
            <li>A sua raiz cúbica é <strong><?=number_format($raiz3, 2, ",",".")?></strong></li>
        </ul>

    </section>
</body>
</html>