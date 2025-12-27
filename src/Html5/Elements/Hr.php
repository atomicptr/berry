<?php declare(strict_types=1);

namespace Berry\Html5\Elements;

use Berry\Html5\BaseNode;

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
