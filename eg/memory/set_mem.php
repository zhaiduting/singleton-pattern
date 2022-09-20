<?php

include '../../vendor/autoload.php';

use Zhaiduting\SingletonPattern\MemoryRegistry;

$fooMemoryReg = MemoryRegistry::instance();
$fooMemoryReg->set('key 1', 'memory value 1');
$fooMemoryReg->set('key 2', 'memory value 2');
