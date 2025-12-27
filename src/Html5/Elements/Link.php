<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Elements;

use HyperKit\Html\Html5\Traits\HasHref;
use HyperKit\Html\Html5\Traits\HasRel;
use HyperKit\Html\Html5\BaseNode;

class Link extends BaseNode
{
    use HasHref;
    use HasRel;

    protected static function tagName(): string
    {
        return 'link';
    }

    protected static function isSelfClosing(): bool
    {
        return true;
    }

    public function integrity(string $value): static
    {
        return $this->attr('integrity', $value);
    }
}
