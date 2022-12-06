<?php

namespace app\controllers;

use app\class\Validar;
use app\models\CalculoDaEntrada;

class CalculoController extends Controller
{
    public function index(){
        $this->view('calculo', ['title' => 'Resultado']);         
    }

    public function store($field){
        session_start();
              
        $field = (float) filter_input(INPUT_POST,'entrada',FILTER_DEFAULT);

        if(!Validar::validate($field)){
            header('Location: /');
        }        

        $calculo = new CalculoDaEntrada;
        
        $calculo->calcular($field);
        
        $_SESSION['menor']     = $calculo->getX();
        $_SESSION['restante']  = $calculo->getZ();
       
        $this->view('calculo');
    }

    
}