<?php

namespace MyTest;
include '../vendor/autoload.php';

use Zhaiduting\SingletonPattern\Registry;

class C extends Registry
{
}

class D extends C
{
    /**
     * To solve the declaration problem in IDE, each parameter should be set with a default value
     */
    function init(): void
    {
        print_rn(func_get_args());
    }
}

print_rn("-------------\$c---------------");
$c = C::instance();
$c->set('foo', 'cccccccccc');
print_rn($c->get('foo'));

print_rn("-------------\$d1--------------");
$d1 = D::instance('instance 1');
$d1->set('foo', 'dddddddddd');
print_rn($d1->get('foo'));

print_rn("-------------\$d2--------------");
$d2 = D::instance('instance 2');
print_rn($d1 === $d2 ? '$d1 === $d2' : '$d1 !== $d2');
$d3 = D::instances('instance 3');
print_rn($d1 === $d3 ? '$d1 === $d3' : '$d1 !== $d3');
print_rn("-----------Registry-----------");
print_rn(Registry::instance());
