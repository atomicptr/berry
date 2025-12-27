<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Elements;

use HyperKit\Html\Traits\HasChildren;
use HyperKit\Html\Traits\HasText;
use HyperKit\Html\Node;

class Style extends Node
{
    use HasChildren;
    use HasText;

    protected static function tagName(): string
    {
        return 'style';
    }
}
