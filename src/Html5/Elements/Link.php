<?php declare(strict_types=1);

namespace Berry\Html5\Elements;

use Berry\Html5\Traits\HasHref;
use Berry\Html5\Traits\HasRel;
use Berry\Html5\BaseNode;

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
