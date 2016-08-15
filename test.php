<?php
require_once('vendor/autoload.php');

use WordsLocked\Locked;

$lock = new Locked();
$result = $lock->test('Eu tenho um carro que não é um caminhão!!');
var_dump($result);