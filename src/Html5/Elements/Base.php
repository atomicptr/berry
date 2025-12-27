<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Elements;

use HyperKit\Html\Html5\Traits\HasHref;
use HyperKit\Html\Html5\Traits\HasTarget;
use HyperKit\Html\Node;

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
