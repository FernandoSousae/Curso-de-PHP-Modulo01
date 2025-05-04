<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $salario = $_GET['salario'] ?? 0;
        $salmin = 1380;
    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="" method="get">
            <label for="salario">Salário</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="calculo">
        <h2>Resultado Final</h2>
        <?php
            $qtdsal = (int) ($salario / $salmin);
            $resto = $salario % $salmin;
            echo "<p>Quem recebe um salário de R$$salario ganha <strong>$qtdsal salários mínimos</strong> + R$$resto.</p>"
        ?>
    </section>
    
</body>
</html>