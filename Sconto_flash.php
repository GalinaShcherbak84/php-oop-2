<?php
require_once __DIR__ . '/Prodotti.php';

// class figlia

class Sconto_flash extends Prodotti{
    //proprietà
    protected $flash;

    //costruttore
    function __construct($_nome, $_tipologia, $_prezzo, $_flash){
        parent:: __construct($_nome, $_tipologia, $_prezzo);
        $this->flash = $_flash;
    }
    //methods
    protected function calcSconto(){
        if($this->flash == 'si'){
            $this->sconto = 5;
        }else{
            $this->sconto = 0;
        }
        
    }
} 

