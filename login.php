<?php


?>

<!DOCTYPE html>
<html lang="en">
<?php require 'head.php'; ?>
<body>
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
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</body>
</html>