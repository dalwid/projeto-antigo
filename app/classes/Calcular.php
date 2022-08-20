<?php

namespace app\classes;

use app\interfaces\CalcularInterface;

class Calcular implements CalcularInterface
{   
    private float $percentual = 20;
    private float $x;
    private float $z;    

    public function calcular(float $entrada){
        //Variavel declarada  
     $this->percentual;
	 //Processo para achar  os 20 porcentos  
	 $this->x = ($this->percentual / 100) * $entrada;
	 //Total do dinheiro tirando 20% do ajudante.  Neste caso fica como acumulador
	 $y = $entrada - $this->x; 
	 //Total do dinheiro tirando os 20% para a garagem.  Neste caso fica como acumulador  
	 $g = $y - $this->x; 
	 /*Total do dinheiro tirando os 20% para o material.  Neste caso fica como acumulador
	    Agora Paulo/Shine up fica com o total ou seja o resto
	  */ 
	  $this->z = $g - $this->x; 
    }

    public function getX(){
        return $this->x;
    }

    public function getZ(){
        return $this->z;
    }

    // public function setX(float $x){
    //     $this->x = $x;
    // }

    // public function setZ(float $z){
    //     $this->z = $z;
    // }

}