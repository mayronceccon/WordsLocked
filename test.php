<?php
require_once('vendor/autoload.php');

use WordsLocked\Locked;

$lock = new Locked();
$result = $lock->test('Eu tenho um carro que n�o � um caminh�o!!');
var_dump($result);