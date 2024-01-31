<?php

declare(strict_types=1);

namespace Yiisoft\Injector\Tests\Common\Support;

final class StaticWithSelfObject
{
    /**
     * @var bool
     */
    public static $wasCalled = false;

    public static function foo(): string
    {
        self::$wasCalled = true;
        return 'bar';
    }
}
