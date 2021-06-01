<?php
    class Prodotti {
        //properties
        protected $nome;
        protected $tipologia;
        protected $prezzo;
        protected $sconto;

        //constructor
        function __construct($_nome, $_tipologia, $_prezzo){
            $this->nome = $_nome;
            $this->tipologia = $_tipologia;
            $this->prezzo = $_prezzo;
        }

        //methods
        public function getNome(){
            return $this->nome;
        }
        public function getTipo(){
            return $this->tipologia;
        }
        public function getPrezzo(){
            return $this->prezzo;
        }
        protected function calcSconto(){
            if($this->tipologia == 'Prodotti per la casa'){
                $this->sconto = 30;
            }elseif($this->tipologia == 'Abbigliamento'){
                $this->sconto = 10;
            }else {
                $this->sconto = 0;
            }
        }
        public function getSconto(){
            $this->calcSconto();
            return $this->sconto;
        }
    }
?>