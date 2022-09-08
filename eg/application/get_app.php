<?php

include '../../vendor/autoload.php';

use Zhaiduting\SingletonPattern\ApplicationRegistry;

$fooApplicationReg = ApplicationRegistry::instance();
print_rn($fooApplicationReg->get('key 1'));
print_rn($fooApplicationReg->get('key 2'));
