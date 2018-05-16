<?php

    class pessoa {
        //Atributos
        var $nome;

        //Métodos - getters e setters
        function setNome($nome_definido){
            $this->nome = $nome_definido;

        }

        function getNome(){
            return $this->nome;
        }
    }
    
    $pessoa = new Pessoa(); //instanciando uma classe

    $pessoa->setNome('Felipe');
    echo $pessoa->getNome();

?>