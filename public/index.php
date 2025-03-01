<?php

namespace App;


require_once('../vendor/autoload.php');


$developer = new Developer('boris',  20, [1, 2, 4]);




$developer->setPosition('developer');
var_dump($developer->getPosition());





