<?php
/**
 * 
 * Cargo las clases automaticamente aca, para despues hacer require
 * en donde yo necesite de mis archivos y mis objetos
 * 
 */ 
require 'helpers.php';
require 'Classes/Validator.php';
require 'Classes/UserFactory.php';
require 'Classes/Database.php';
require 'Classes/DBJSON.php';
require 'Classes/HashPassword.php';
require 'Classes/User.php';
/**
 * 
 * Aca armo las instancias si las necesito, mismo concepto que el comment
 * anterior. Si necesito algo de esto, hago require de este archivo solo
 * y no de TODO lo que aparece aca.
 * 
 */

$validator = new Validator();
$factory = new UserFactory();
$db = new DBJSON('users.json');



