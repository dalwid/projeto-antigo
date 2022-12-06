<?php

namespace app\class;

class Validar{

    public  static function validate(float $field){
        if (!filter_var($field, FILTER_VALIDATE_FLOAT)) {
            die("NÂO ACEITAMOS LETRAS AQUI");
        }
    }
    
}
