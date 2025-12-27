<?php declare(strict_types=1);

namespace Berry\Html5\Elements;

use Berry\Html5\BaseNode;
use Berry\Traits\HasChildren;

class Ol extends BaseNode
{
    use HasChildren;

    protected static function tagName(): string
    {
        return 'ol';
    }
}
