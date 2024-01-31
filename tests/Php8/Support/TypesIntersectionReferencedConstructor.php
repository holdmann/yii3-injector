<?php

declare(strict_types=1);

namespace Yiisoft\Injector\Tests\Php8\Support;

use ArrayAccess;
use Countable;

class TypesIntersectionReferencedConstructor
{
    /**
     * @var \ArrayAccess&\Countable
     */
    public $collection;
    /**
     * @param \ArrayAccess&\Countable $collection
     */
    public function __construct(&$collection)
    {
        $this->collection = $collection;
    }
}
