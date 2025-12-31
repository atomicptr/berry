<?php declare(strict_types=1);

namespace Berry;

use Berry\Contract\HasAttributesContract;
use Berry\Contract\HasExtensionMethodsContract;
use Berry\Contract\IsRenderableContract;
use Berry\Traits\HasAttributes;
use Berry\Traits\HasExtensionMethods;
use Berry\Traits\Renderable;

abstract class AbstractTag implements Element, HasAttributesContract, HasExtensionMethodsContract, IsRenderableContract
{
    use HasAttributes;
    use HasExtensionMethods;
    use Renderable;

    public function __construct(
        protected string $tagName
    ) {}
}
