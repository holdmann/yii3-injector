<?php

declare(strict_types=1);

namespace Yiisoft\Injector\Tests\Common\Support;

abstract class LightEngine implements EngineInterface
{
    /**
     * @var int
     */
    protected $power;

    public function getPower(): int
    {
        return $this->power;
    }

    public static function isWroomWroom(): bool
    {
        return true;
    }
}
