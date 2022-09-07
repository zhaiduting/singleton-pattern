<?php

include '../vendor/autoload.php';
include './print_rn.php';

use Zhaiduting\SingletonPattern\SessionRegistry;

$fooSessionReg = SessionRegistry::instance('foo');
print_rn($fooSessionReg->get('key 1'));
print_rn($fooSessionReg->get('key 2'));
