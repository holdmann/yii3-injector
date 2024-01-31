<?php

declare(strict_types=1);

namespace Yiisoft\Injector\Tests\Common\Support;

final class Circle
{
    /**
     * @var \Yiisoft\Injector\Tests\Common\Support\ColorInterface
     */
    private $color;
    /**
     * @var string|null
     */
    private $name;

    public function __construct(ColorInterface $color, ?string $name = null)
    {
        $this->color = $color;
        $this->name = $name;
    }

    public function getColor(): string
    {
        return $this->color->getColor();
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}
