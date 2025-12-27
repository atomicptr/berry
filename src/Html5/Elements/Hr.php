<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Elements;

use HyperKit\Html\Html5\BaseNode;

class Hr extends BaseNode
{
    protected static function tagName(): string
    {
        return 'hr';
    }

    protected static function isSelfClosing(): bool
    {
        return true;
    }
}
