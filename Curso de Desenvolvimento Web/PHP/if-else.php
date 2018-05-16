<?php 
    // Operadores de Comparação

    // ==
    // if (2 == 2) {
    //     echo 'Verdadeira';
    // } else {
    //     echo 'Falsa';
    // }


    // === identico, mesmo valor. No caso do exemplo, um é um inteiro e outro é string. Então é falso
    // if (2 === '2') {
    //     echo 'Verdadeira';
    // } else {
    //     echo 'Falsa';
    // }


    // != operador diferente <>
    // if ('x' !== 'x') {
    //     echo 'Verdadeira';
    // } else {
    //     echo 'Falsa';
    // }

    // if ('x' <> 'x') {
    //     echo 'Verdadeira';
    // } else {
    //     echo 'Falsa';
    // }

    // !== operador não identico
    // if (5 !== 5) {
    //     echo 'Verdadeira';
    // } else {
    //     echo 'Falsa';
    // }

    // <
    // if (5 < 6) {
    //     echo 'Verdadeira';
    // } else {
    //     echo 'Falsa';
    // }

    // >
    //     if (5 > 6) {
    //     echo 'Verdadeira';
    // } else {
    //     echo 'Falsa';
    // }

    // <=
    // if (5 <= 6) {
    //     echo 'Verdadeira';
    // } else {
    //     echo 'Falsa';
    // }

    // >=
    // if (7 >= 6) {
    //     echo 'Verdadeira';
    // } else {
    //     echo 'Falsa';
    // }

    // Operadores lógicos

    // AND verdadeiro se todas as expressões forem verdadeiras
    if (7 == 6 AND 5 > 4) {
        echo 'Verdadeira';
    } else {
        echo 'Falsa';
    }

    echo '<br/>';

    // && verdadeiro se todas as expressões forem verdadeiras
    if (5 == 5 && 5 > 3) {
        echo 'Verdadeira';
    } else {
        echo 'Falsa';
    }

    echo '<br/>';
    echo '<br/>';

    // OR verdadeiro se pelo menos uma das experssões for verdadeira
    if (7 == 6 OR 5 > 4) {
        echo 'Verdadeira';
    } else {
        echo 'Falsa';
    }
    echo '<br/>';

    // || verdadeiro se pelo menos uma das experssões for verdadeira
    if (7 === '7' || 5 > 6) {
        echo 'Verdadeira';
    } else {
        echo 'Falsa';
    }
    echo '<br/>';
    echo '<br/>';

    // XOR verdadeiro apenas se uma das expressões for verdadeira, se ambas forem verdadeiro retorna falso
    if (7 !== 3 XOR 5 > 6) {
        echo 'Verdadeira';
    } else {
        echo 'Falsa';
    }
    echo '<br/>';

    // ! inverte o resultado da expressão
    if (!(7 <> 6)) {
        echo 'Verdadeira';
    } else {
        echo 'Falsa';
    }

?>