<?php

namespace Zhaiduting\SingletonPattern;

class Singleton
{
    private static array $instance = [];

    final private function __construct()
    {
    }

    final static function instance()
    {
        $k = get_class(new static);
        if (empty(self::$instance[$k]))
            self::$instance[$k] = new static();
        return self::$instance[$k];
    }
}
