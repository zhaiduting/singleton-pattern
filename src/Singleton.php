<?php

namespace Zhaiduting\SingletonPattern;

class Singleton
{
    private static array $instance = [];

    static function init()
    {
    }

    final private function __construct()
    {
        static::init();
    }

    final static function instance()
    {
        $k = static::class;
        if (empty(self::$instance[$k]))
            self::$instance[$k] = new static();
        return self::$instance[$k];
    }
}
