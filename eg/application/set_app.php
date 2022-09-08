<?php

include '../../vendor/autoload.php';

use Zhaiduting\SingletonPattern\ApplicationRegistry;

$fooApplicationReg = ApplicationRegistry::instance();
$fooApplicationReg->set('key 1', 'app value 1');
$fooApplicationReg->set('key 2', 'app value 2');
