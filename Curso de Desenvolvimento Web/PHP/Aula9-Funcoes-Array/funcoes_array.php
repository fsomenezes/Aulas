

<?php

    // is_array = verifica se uma variável é um array
    // $array = array();
    // $retorno = is_array($array);

    // if ($retorno) {
    //     echo "Verdadeiro";
    // } else {
    //     echo "False";
    // }


    // in_array = verifica se um valor exite em um array
    // $array = array('mac','windows','linux');
    // $retorno = in_array('terra', $array);

    // if ($retorno) {
    //     echo "Verdadeiro";
    // } else {
    //     echo "False";
    // }


    // array_keys = retorna todas as chaves de um array
    // $produtos = array(10=>'Notebook',11=>'Teclado');
    // $chaves_array = array_keys($produtos);
    // var_export($chaves_array);


    // sort = ordena um array
    // $frutas = array(0=>'Banana',1=>'Amora',3=>'Carambola');

    // sort($frutas);
    // var_export($frutas);


    // asort = ordena um array, mantendo índice/valor
    // $frutas = array(0=>'Banana',1=>'Amora',3=>'Carambola');

    // asort($frutas);
    // var_export($frutas);


    // count - conta elementos de um array
    // $frutas = array(0=>'Banana',1=>'Amora',3=>'Carambola');

    // $itens_array = count($frutas);
    // echo $itens_array;
    

    // array_merge = funde um ou mais array_search
    // $array1 = array('mac','windows');
    // $array2 = array('linux');

    // $novo_array = array_merge($array1,$array2);
    // var_export($novo_array)


    // explode = divide uma string baseado em um delimitador
    // $string = "20/10/2010";
    // $retorno = explode("/", $string);

    // var_export($retorno);


    // implode = junta elementos de um array em uma string
    $string = "20/10/2010";
    $retorno = explode("/", $string);
    
    $nova_string = implode("-", $retorno);
    
    echo $nova_string;

?>