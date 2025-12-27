<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Elements;

use HyperKit\Html\Html5\Traits\HasSrc;
use HyperKit\Html\Html5\BaseNode;

class Img extends BaseNode
{
    use HasSrc;

    protected static function tagName(): string
    {
        return 'img';
    }

    protected static function isSelfClosing(): bool
    {
        return true;
    }
}
