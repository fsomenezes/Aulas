<?php

    class Veiculo{

        // Public

        // public $placa;
        // private $cor;
        // protected $tipo;



        //Private

    //     private $placa;
    //     private $cor;
    //     private $tipo;

    //     public function setPlaca($parametro_placa){
    //         //Validação da placa
    //         $this->placa = $parametro_placa;
    //     }

    //     public function getPlaca(){
    //         return $this->placa;
    //     }


    //Protected

    protected $tipo = 'Caminhonete';



    }
    //Public
    // $veiculo = new Veiculo();
    // $veiculo->placa = 'JAM3658 <br/>';
    // echo $veiculo->placa;



    // //Private
    // $veiculo = new Veiculo();
    // $veiculo->setPlaca ('JAM3658');
    // echo $veiculo->getPlaca();
    

    //Protected
    class Carro extends Veiculo{
        public function exibirTipo(){
            echo $this->tipo;
        }
    }
    
    $carro = new Carro();
    $carro->exibirTipo();
    

?>