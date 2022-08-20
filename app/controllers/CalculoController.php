<?php

namespace app\controllers;

use app\classes\Calcular;
use app\classes\Validate;
use app\models\ResultadoModel;

class CalculoController 
{
        
    private float $percentual;
    public float $x;
    private float $z;
    

    public function index(){
        Controller::view('calculo');   
    }    

    public function show($param){        
        $param = (float) filter_input(INPUT_POST,'entrada', FILTER_SANITIZE_NUMBER_FLOAT);
        self::calcular($param);
        header("Location: /calculo"); 
        
    }

    private function calcular($entrada){
        //Variavel declarada  
     $this->percentual = 20;
	 //Processo para achar  os 20 porcentos  
	 $this->x = ($this->percentual / 100) * $entrada;
	 //Total do dinheiro tirando 20% do ajudante.  Neste caso fica como acumulador
	 $y = $entrada - $this->x; 
	 //Total do dinheiro tirando os 20% para a garagem.  Neste caso fica como acumulador  
	 $g = $y - $this->x; 
	 /*Total do dinheiro tirando os 20% para o material.  Neste caso fica como acumulador
	    Agora Paulo/Shine up fica com o total ou seja o resto
	  */ 
	  return $this->z = $g - $this->x; 
    }

    public function getX(){
        return $this->x;
    }

    public function getZ(){
        return $this->z;
    }

    
}