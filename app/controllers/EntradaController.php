<?php

namespace app\controllers;

class EntradaController extends Controller
{
   
    public function index($entrada){
        $this->view('entrada', ['title'=>'Entrada']);        
    }

    public function store(){
        
        $this->view('calculo');
    }

    
}