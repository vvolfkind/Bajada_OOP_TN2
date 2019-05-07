<?php

class Validator
{
    public function validate(User $user, string $cpassword = "")
    {
        $errors = array();

        if($user->getEmail() == "") {
            $errors['email'] = "Capo, me dejaste el email vacio";
        } else if(!filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Crack el email no es valido";
        }

        if($user->getPassword() == "") {
            $errors['password'] = "Capo, me dejaste el password vacio";
        }else if(strlen($user->getPassword()) < 6) {
            $errors['password'] = "Maquina, el pass tiene que ser mayor a 6 digitos";
        } else if( $cpassword !== "" && $user->getPassword() !== $cpassword) {
            $errors['cpassword'] = "Idolo, las pass no coinciden";
        }
        if(isset($_FILES)) {
            if(!$this->validateAvatar($_FILES)) {
                $errors['image'] = "Imagen no valida";
            }
        }

        return $errors;
    }

    private function validateAvatar($file)
    {
        return true;
    }
}