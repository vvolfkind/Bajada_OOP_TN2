<?php

require 'helpers.php';
require 'Classes/Validator.php';
require 'Classes/UserFactory.php';
require 'Classes/Database.php';
require 'Classes/DBJSON.php';

$validator = new Validator();
$factory = new UserFactory();
$db = new DBJSON('users.json');
