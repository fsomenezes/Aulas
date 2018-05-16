<?php

    $noticias = array();

    $noticias[1]['titulo'] = 'Noticia 1';
    $noticias[1]['conteudo'] = 'Texto 1';

    $noticias[2]['titulo'] = 'Noticia 2';
    $noticias[2]['conteudo'] ='Texto 2';

    $noticias[3]['titulo'] = 'Noticia 3';
    $noticias[3]['conteudo'] = 'Texto 3';

    // var_dump($noticias);
    // $idx = 1;
    // while ($idx <= 3) {
        
    //     echo $noticias[1]['titulo'];
    //     echo '<br/>';
    //     echo $noticias[1]['conteudo'];
    //     echo '<br/>';

    //     echo $noticias[$idx]['titulo'];
    //     echo '<br/>';
    //     echo $noticias[$idx]['conteudo'];
    //     echo '<br/>';

    //     $idx = $idx + 1;

    // }

    // $idx = 1;
    // do {
        
    //     echo $noticias[$idx]['titulo'];
    //     echo '<br/>';
    //     echo $noticias[$idx]['conteudo'];
    //     echo '<br/>';

    //     $idx = $idx + 1;
    // } while ($idx <= 3);

    for ($idx=1; $idx <= 3 ; $idx= $idx + 1) { 
        echo $noticias[$idx]['titulo'];
        echo '<br/>';
        echo $noticias[$idx]['conteudo'];
        echo '<br/>';
    }

?>

