<?php
require 'loader.php';

if(guest()) {
    redirect('login.php');
}

$user = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<?php require 'head.php'; ?>
<body>
    <div class="container">
        <?php require'navbar.php'; ?>
        <div class="row">
            <h1 class="text-center">Bienvenido <?=$user ?></h1>
        </div>  
    <div class="row">
</body>
</html>