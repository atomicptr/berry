<?php declare(strict_types=1);

namespace Berry;

use Berry\Contract\HasChildrenContract;
use Berry\Traits\HasChildren;

class Fragment implements Element, HasChildrenContract
{
    use HasChildren;

    public function toString(): string
    {
        return implode('', $this->children ?? []);
    }

    public function __toString(): string
    {
        return $this->toString();
    }
}
