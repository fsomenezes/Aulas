<?php

    require_once("funcao-de-desconto.php");

    $valor_total = 800;
    $deconto = 10;

    $valor_final = calcula_desconto($valor_total, $deconto);

?>

Valor total: R$ <?php echo $valor_total ?> <br/>
Valor desconto: <?php echo $deconto ?> <br/>
Valor total final: R$ <?php echo $valor_final ?>