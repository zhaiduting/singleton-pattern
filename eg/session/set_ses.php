<?php

include '../../vendor/autoload.php';

use Zhaiduting\SingletonPattern\SessionRegistry;

$fooSessionReg = SessionRegistry::instance('foo');
$fooSessionReg->set('key 1', 'value 1');
$fooSessionReg->set('key 2', 'value 2');
