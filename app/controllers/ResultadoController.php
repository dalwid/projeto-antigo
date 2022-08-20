<?php

namespace app\controllers;

class ResultadoController
{
    public function index(){
        Controller::view('resultado');
    }

    public function show($param){
        var_dump($param);
    }
}