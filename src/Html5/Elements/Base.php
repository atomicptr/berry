<?php declare(strict_types=1);

namespace Berry\Html5\Elements;

use Berry\Html5\Traits\HasHref;
use Berry\Html5\Traits\HasTarget;
use Berry\Node;

class Base extends Node
{
    use HasHref;
    use HasTarget;

    protected static function tagName(): string
    {
        return 'base';
    }

    protected static function isSelfClosing(): bool
    {
        return true;
    }
}
