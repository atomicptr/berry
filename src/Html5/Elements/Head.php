<?php declare(strict_types=1);

namespace Berry\Html5\Elements;

use Berry\Traits\HasChildren;
use Berry\Node;

class Head extends Node
{
    use HasChildren;

    protected static function tagName(): string
    {
        return 'head';
    }
}
