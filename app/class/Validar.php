<?php

namespace app\class;

class Validar{

    public  static function validate(float $field){
        $yes_or_no = true;
        if (!filter_var($field, FILTER_VALIDATE_FLOAT)) {
            return $yes_or_no = false;
        }
        return $yes_or_no;
    }
    
}
