<?php

namespace MyTest;
include '../vendor/autoload.php';
include './print_rn.php';

use Zhaiduting\SingletonPattern\Singleton;

class C extends Singleton
{
    private $values = [];

    function get($key)
    {
        return $this->values[$key] ?? null;
    }

    function set($key, $value)
    {
        $this->values[$key] = $value;
    }

}

class D extends C
{
    /**
     * To solve the declaration problem in IDE, each parameter should be set with a default value
     */
    function init($arr = '')
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
$d3 = D::instance('instance 1');
print_rn($d1 === $d3 ? '$d1 === $d3' : '$d1 !== $d3');
print_rn("-----------Singleton-----------");
print_rn(Singleton::instance());
