<?php
require_once("./includes/functions.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>HTML e PHP</title>
    </head>
    <body>
        <?php
        echo "Teste/n de/n quebra/n de/n linha/n";
        echo "Teste<br/> de<br/> quebra<br/> de<br/> linha<br/>";
        ?>
        <p>
            Soma: <?= soma(30, 20); ?> <br />
            Subtração: <?= subtracaoComRetornoPositivo(20, 60); ?. <br />
            Multiplicação: <?= multiplica(2, 5) ?> 
        </p>
    </body>
</html>