<?php
/**
 * 
 * Hola! Soy Validator, y solamente instancio objetos que validan. Quiza me 
 * recuerden de peliculas como "Si sos menor no pasas" o "Buenas noches, 
 * documentos".
 * 
 * De momento solamente tengo un metodo publico, validate() (cuack), que
 * recibe un User y devuelve un array de errores. Toda la logica de ahi adentro
 * ya la vieron durante 21mil minutos (literalmente) o quiza mas, asi que no 
 * voy a agregar nada nuevo.
 * 
 * Sayonara!
 * 
 * 
 */
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

        return $errors;
    }
}