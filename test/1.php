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
    public static array $instance = [__CLASS__ => 2];
}

$c = C::instance();
$c->set('foo', 'ccc');

$d = D::instance();
$d->set('foo', 'ddd');

$s = Singleton::instance();

print_r($c->get('foo') . "\n");
print_r($d->get('foo') . "\n");
print_r($d::$instance);
