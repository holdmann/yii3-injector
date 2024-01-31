<?php

declare(strict_types=1);

namespace Yiisoft\Injector\Tests\Common\Support;

class EngineZIL130 implements EngineInterface
{
    public const NAME = 'ZIL 130';

    /**
     * @var int
     */
    private $power = 148;

    public function getName(): string
    {
        return static::NAME;
    }

    public function getPower(): int
    {
        return $this->power;
    }
}
