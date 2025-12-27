<?php declare(strict_types=1);

namespace Berry\Html5\Elements;

use Berry\Html5\BaseNode;
use Berry\Traits\HasChildren;
use Berry\Traits\HasText;

class Label extends BaseNode
{
    use HasChildren;
    use HasText;

    protected static function tagName(): string
    {
        return 'label';
    }

    public function for(string $value): static
    {
        return $this->attr('for', $value);
    }
}
