<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler();

$validator = $pp->getValidator();
//$validator->fields(['matricula'])->areRequired()->maxLength(50);
//$validator->field('correo')->isEmail();
//$validator->field('mensaje')->maxLength(6000);
//$validator->field('cedula)->maxLength(10);


$pp->attachFiles(['documentoinformador']);


$pp->sendEmailTo(['camilowebmaster@gmail.com', 'nicolas970329@gmail.com ']);


echo $pp->process($_POST);
