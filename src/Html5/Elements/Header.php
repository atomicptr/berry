<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Elements;

use HyperKit\Html\Html5\BaseNode;
use HyperKit\Html\Traits\HasChildren;
use HyperKit\Html\Traits\HasText;

class Header extends BaseNode
{
    use HasChildren;
    use HasText;

    protected static function tagName(): string
    {
        return 'header';
    }
}
