<?php

require 'loader.php';

$errors = array();

if($_POST) {
    $errors = $validator->validate($_POST);

    if(count($errors) == 0) {
        $userArray = $factory->create($_POST);
        $db->save($userArray);

        redirect('login.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php require 'head.php'; ?>
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