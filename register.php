<?php
// Mi loader con todos los require necesarios.
require 'loader.php';

// Declaro $errors como array vacio, 
// si mas adelante se llena con algo se muestra
$errors = array();

if($_POST) {
// Si entro a este IF, voy a igualar mi array VACIO $errors, a lo que sea
// que me devuelve el objeto $validator (instanciado en loader.php), haciendo
// uso de su metodo publico validate()
    $errors = $validator->validate($_POST);
    if(count($errors) == 0) {
        // Si entro aca es porque el array $errors NO TIENE algun error
        $userArray = $factory->create($_POST);
        // $userArray es una variable. Que voy a meter en esa variable?
        // lo que sea que devuelve mi amigo $factory haciendo uso de su metodo
        // publico create(). Nosotros ya sabemos que ese metodo devuelve un
        // array, asi que lo "esperamos" y pasamos al proximo paso
        $db->save($userArray);
        // Aca no igualamos nada a nadie con nada de nadie. Solamente
        // ejecutamos el metodo publico save() que pertenece a nuestro amigo
        // $db. $db es lo que nosotros conocemos como base de datos al dia de
        // hoy. Solamente graba en un archivo JSON.
        redirect('login.php');
        // helper para no tener que escribir header location exit blabla...


        /**
         * Aca termino el bloque del IF
         * 
         */
    }



    // Si $errors tenia algun error, nunca entre al IF anterior,
    // por lo cual PHP sigue de largo pero con $errors conteniendo
    // lo que sea que devolvio mi objeto amiguero $validator

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>TN2</title>
    <style>
        ul {
            list-style: none;
        }
    </style>
  </head>
  <body>
    <div class="container">
    <h1 class="text-center">Registrate!</h1>
    <!-- Todo esto ya se vio en php estructurado -->
    <?php if(count($errors) > 0):?>
    <ul class="col-md-6 offset-md-3">
        <?php foreach($errors as $error): ?>
        <li class="alert alert-danger"> <?=$error ?></li>
        <?php endforeach;?>
    </ul>
    <?php endif;?>
    <form action="" method="post" class="col-md-6 offset-md-3">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <?php if(isset($errors['email'])):?>
        <span class="alert alert-danger"> <?=$errors['email'] ?></span>
        <?php endif;?>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label for="">Confirmar Password</label>
            <input type="password" class="form-control" name="cpassword">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>