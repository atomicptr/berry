<?php declare(strict_types=1);

namespace Berry\Html5\Elements;

use Berry\Html5\BaseNode;
use Berry\Traits\HasText;

class Title extends BaseNode
{
    use HasText;

    protected static function tagName(): string
    {
        return 'title';
    }
}
