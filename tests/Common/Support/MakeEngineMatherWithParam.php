<?php

declare(strict_types=1);

namespace Yiisoft\Injector\Tests\Common\Support;

class MakeEngineMatherWithParam
{
    /**
     * @var \Yiisoft\Injector\Tests\Common\Support\EngineInterface
     */
    public $engine1;
    /**
     * @var \Yiisoft\Injector\Tests\Common\Support\EngineInterface
     */
    public $engine2;
    /**
     * @var string
     */
    public $parameter;

    public function __construct(string $parameter, EngineInterface $engine1, EngineInterface $engine2)
    {
        $this->engine1 = $engine1;
        $this->engine2 = $engine2;
        $this->parameter = $parameter;
    }
}
