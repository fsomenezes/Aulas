<?php

    class Pessoa{

        private $nome;

        public function correr(){
            echo $this->nome . " correndo<br/>";
        }

        function __construct($parametro_nome){
            echo 'Construtor Iniciado <br/>';
            $this->nome = $parametro_nome;
            // echo $this->nome;
        }
    }

    $pessoa = new Pessoa('Felipe');
    $pessoa->correr();


?>