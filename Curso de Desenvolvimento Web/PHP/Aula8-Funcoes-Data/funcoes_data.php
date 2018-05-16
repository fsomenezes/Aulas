<?php

    //date = Y - m - d
    echo $data =date("d-m-Y H:i <br/>");

    //strtotime = calcuma a diferença de data
    $data_inicial = '2015-04-03';
    $data_final = '2015-04-07';

    echo '<br/>';

    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);

    $diferenca_time = $time_final - $time_inicial;

    $diaSegundos = 24*60*60;

    $diferenca_dias = $diferenca_time / $diaSegundos;
    echo $diferenca_dias;


?>