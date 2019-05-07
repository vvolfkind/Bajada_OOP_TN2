<?php
require 'loader.php';


Session::destroy();
redirect('login.php');