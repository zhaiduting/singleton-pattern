<?php

namespace Test;
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
    static array $initialize_only_once;

    static function init()
    {
        print_r(self::$initialize_only_once);
    }
}

$c = C::instance();
$c->set('foo', 'ccc');

D::$initialize_only_once = ['Parameters', 'passed', 'for', 'initialization'];
$d = D::instance();
$d->set('foo', 'ddd');

$s = Singleton::instance();

print_r($c->get('foo') . "\n");
print_r($d->get('foo') . "\n");
print_r($d::$instance);
