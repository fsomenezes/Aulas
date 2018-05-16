<?php

    

    

    

    

    

    // $texto = "curso Completo de PHP 7,2 <br/>";
    
    // strtolower - string minúscula, todas as letras da string serão impressas em minúsculo
    // echo strtolower($texto);

   
    // strtoupper - string maiúscula, todas as letras da string serão impressas em maiúsculo
    // echo strtoupper($texto);
    
    
    // ucfrist - a primeira letra de uma string maiúscula
    // echo ucfirst($texto);


    // strlen - para contar os caracteres numa string
    // echo strlen($texto);
    // $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';  //valida se existe a varial
    // $total_string_cpf = strlen($cpf);

    // if ($total_string_cpf != 11) {
    //     echo 'CPF Invalido';
    // }

    // str_replace - substituir um caracter especifico numa string por outro. ex: 12.50 por 12,50, substituindo o "." por "," 
    // echo str_replace($texto);
    // $texto = "12.40";
    // echo str_replace(".", ",", $texto);


    // substr - retorna uma parte de uma string
    $texto = "Hasdh kjalskd jiojnalksd mokmaksd oljalksd maoisdj aksdm aoksdj aksdm oaksd o";
    echo substr($texto, 0, 25);


?>

    <!-- <form method="post" action="">
        <label>CPF
        <input type="text" name="cpf">
        </label>
        
        <input type="submit" value="cadastrar">
    </form> -->

