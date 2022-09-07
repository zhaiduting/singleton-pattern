<?php

include '../../vendor/autoload.php';

use Zhaiduting\SingletonPattern\SessionRegistry;

$fooSessionReg = SessionRegistry::instance('foo');
print_rn($fooSessionReg->get('key 1'));
print_rn($fooSessionReg->get('key 2'));
