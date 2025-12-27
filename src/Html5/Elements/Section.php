<?php declare(strict_types=1);

namespace Berry\Html5\Elements;

use Berry\Html5\BaseNode;
use Berry\Traits\HasChildren;
use Berry\Traits\HasText;

class Section extends BaseNode
{
    use HasChildren;
    use HasText;

    protected static function tagName(): string
    {
        return 'section';
    }
}
