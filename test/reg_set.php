<?php

include '../vendor/autoload.php';
include './print_rn.php';

use Zhaiduting\SingletonPattern\SessionRegistry;

$fooSessionReg = SessionRegistry::instance('foo');
$fooSessionReg->set('key 1', 'value 1');
$fooSessionReg->set('key 2', 'value 2');
