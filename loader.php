<?php

require 'helpers.php';
require 'Classes/Validator.php';
require 'Classes/UserFactory.php';
require 'Classes/Database.php';
require 'Classes/DBJSON.php';
require 'Classes/HashPassword.php';
require 'Classes/User.php';
require 'Classes/Session.php';
require 'Classes/Auth.php';
require 'Classes/Cookie.php';
require 'Classes/Product.php';
require 'Classes/Category.php';
require 'Classes/Cart.php';

Session::start();

$validator = new Validator();
$factory = new UserFactory();
$db = new DBJSON('users.json');
$auth = new Auth();

// // Test del ejercicio de productos y categorias

// // Instancio una categoria
// $category = new Category('morfi');
// // instancio un producto, pero en los parametros mando la categoria que quiera
// // (otra cosa no puede ir, tiene que ser del tipo Category)
// $pizza = new Product('Grande de Muzza', $category, 195.00);

// // vardump del nombre del producto
// var_dump($pizza->getName());
// // nada nuevo

// // pero, lo primero que harian si digo "traigan el nombre de la categoria"...
// var_dump($category->getName());

// // Y lo que yo quiero es el nombre de la categoria DEL PRODUCTO
// var_dump($pizza->getCategory());

// // SI! Pero eso me devuelve el objeto del tipo Category que tiene adentro...
// // y el nombre?

// // Si ese ultimo vardump me dejo el objeto category en la pantalla, no le podre
// // pedir el nombre usando su getter (EL DE CATEGORY)?
// var_dump($pizza->getCategory()->getName());
// exit;

//voila!



