<?php
    //Classe mãe ou superclass
    class Felino{
        var $mamifero = 'Sim';

        function correr(){
            echo 'Correr como felino';
        }
    }
    // Classe filha ou subclass
    class Chita extends Felino{
        //Polimorfismo
        function correr(){
            echo 'Corre a 100 kilometros por hora';
        }
    }

$chita = new Chita();

echo $chita->mamifero . '<br/>';
$chita->correr();

?>