<?php

namespace Zhaiduting\SingletonPattern;

class Singleton
{
    private static array $instance = [];

    function init(): void
    {
    }

    final private function __construct(...$args)
    {
        static::init(...$args);
    }

    final static function instance(...$args)
    {
        $k = static::class;
        if (count($args))
            $k .= ' ' . serialize($args);
        if (empty(self::$instance[$k]))
            self::$instance[$k] = new static(...$args);
        return self::$instance[$k];
    }
}
