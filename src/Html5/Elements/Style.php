<?php declare(strict_types=1);

namespace Berry\Html5\Elements;

use Berry\Traits\HasChildren;
use Berry\Traits\HasText;
use Berry\Node;

class Style extends Node
{
    use HasChildren;
    use HasText;

    protected static function tagName(): string
    {
        return 'style';
    }
}
