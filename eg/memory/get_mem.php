<?php

include '../../vendor/autoload.php';

use Zhaiduting\SingletonPattern\MemoryRegistry;

$fooMemoryReg = MemoryRegistry::instance();
print_rn($fooMemoryReg->get('key 1'));
print_rn($fooMemoryReg->get('key 2'));
