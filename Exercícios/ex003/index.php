<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php 
        // $num = 0x1A;
        // echo "O valor da variável é $num";

        $v = 300;
        var_dump($v);
    ?>
    <h2>Strings em PHP</h2>
    <?php 
        $nome = "Fernando";
        $sobrenome = "Sousa";
        echo "$nome$sobrenome \u{1F596}";
        
        const ESTADO = "SP";
        echo "Moro no".ESTADO;

    ?>
</body>
</html>