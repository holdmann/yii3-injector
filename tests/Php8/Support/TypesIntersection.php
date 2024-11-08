<?php

declare(strict_types=1);

namespace Yiisoft\Injector\Tests\Php8\Support;

use ArrayAccess;
use ArrayIterator;
use Closure;
use Countable;

class TypesIntersection
{
    public ArrayAccess&Countable $collection;
    /**
     * @param \ArrayAccess&\Countable $collection
     */
    public function __construct($collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return \ArrayAccess&\Countable
     */
    public function getCollection()
    {
        return $this->collection;
    }

    public static function getClosure(): Closure
    {
        return static function ($collection = null) {
            $collection ??= new ArrayIterator();
            return $collection;
        };
    }

    /**
     * @param \ArrayAccess&\Countable ...$variadic
     */
    public static function getVariadic(...$variadic): array
    {
        return $variadic;
    }

    /**
     * @param \ArrayAccess&\Countable $param1
     * @param \ArrayAccess&\Countable $param2
     * @param \ArrayAccess&\Countable $param3
     * @param \ArrayAccess&\Countable $param4
     */
    public static function getMultiple(
        $param1,
        $param2,
        $param3,
        $param4
    ): array {
        return \func_get_args();
    }
}
