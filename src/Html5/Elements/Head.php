<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Elements;

use HyperKit\Html\Traits\HasChildren;
use HyperKit\Html\Node;

class Head extends Node
{
    use HasChildren;

    protected static function tagName(): string
    {
        return 'head';
    }
}
