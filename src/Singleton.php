<?php

namespace Zhaiduting\SingletonPattern;

class Singleton
{
    private static array $instance = [];

    static function init()
    {
    }

    final private function __construct(...$args)
    {
        static::init(...$args);
    }

    final static function instance(...$args)
    {
        $k = static::class;
        if (empty(self::$instance[$k]))
            self::$instance[$k] = new static(...$args);
        return self::$instance[$k];
    }
}
