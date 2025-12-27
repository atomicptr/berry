<?php declare(strict_types=1);

namespace Berry\Html5\Elements;

use Berry\Html5\Traits\HasHref;
use Berry\Html5\BaseNode;
use Berry\Traits\HasChildren;
use Berry\Traits\HasText;

class A extends BaseNode
{
    use HasChildren;
    use HasText;
    use HasHref;

    protected static function tagName(): string
    {
        return 'a';
    }

    public function download(): static
    {
        return $this->flag('download');
    }
}
