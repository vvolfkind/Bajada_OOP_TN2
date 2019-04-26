<?php

class Validator
{
    public function validate($data)
    {
        $errors = array();

        if($data['email'] == "") {
            $errors['email'] = "Capo, me dejaste el email vacio";
        } else if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Crack el email no es valido";
        }

        if($data['password'] == "") {
            $errors['password'] = "Capo, me dejaste el password vacio";
        }else if(strlen($data['password']) < 6) {
            $errors['password'] = "Maquina, el pass tiene que ser mayor a 6 digitos";
        } else if( $data['password'] !== $data['cpassword']) {
            $errors['cpassword'] = "Idolo, las pass no coinciden";
        }

        return $errors;
    }
}