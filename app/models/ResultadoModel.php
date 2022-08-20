<?php

namespace app\models;

use app\classes\Calcular;
use app\classes\Validate;

class ResultadoModel 
{   
    private $ajudante;
    private $material;
    private $garagem;
    private $paulo;
    
    public function __construct()
    {
        //$calc = new Calcular;
        
    }

    public function getAjudante(){
       return $this->ajudante;
    }

    public function setAjudante($ajudante){
        $this->ajudante = $ajudante;
    }


}