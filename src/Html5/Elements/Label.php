<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Elements;

use HyperKit\Html\Html5\BaseNode;
use HyperKit\Html\Traits\HasChildren;
use HyperKit\Html\Traits\HasText;

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
