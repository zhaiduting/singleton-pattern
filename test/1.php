<?php

namespace MyTest;
include '../src/Singleton.php';

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
    static array $instance = [__CLASS__ => 'Will not overwrite Singleton::$instance'];

    static function init($arr = 'To solve the problem of declaration')
    {
        print_r(func_get_args());
    }
}

$c = C::instance();
$c->set('foo', 'cccccccccc');
print_r($c->get('foo') . "\n");

echo "------------------------------\n";
$d1 = D::instance('Parameters', 'need', 'only', 'be', 'passed', 'once');
$d1->set('foo', 'dddddddddd');
print_r($d1->get('foo') . "\n");
print_r($d1::$instance);

echo "------------------------------\n";
$d2 = D::instance();
echo($d1 === $d2 ? '$d1 === $d2' : '$d !== $d2');
