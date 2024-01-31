<?php

declare(strict_types=1);

namespace Yiisoft\Injector\Tests\Php8\Support;

use DateTimeInterface;

class TimerUnionTypes
{
    /**
     * @var string|\DateTimeInterface
     */
    private $time;

    /**
     * @param string|\DateTimeInterface $time
     */
    public function __construct($time)
    {
        $this->time = $time;
    }

    /**
     * @return string|\DateTimeInterface
     */
    public function getTime()
    {
        return $this->time;
    }
}
