<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Elements;

use HyperKit\Html\Html5\BaseNode;
use HyperKit\Html\Traits\HasChildren;

class Tr extends BaseNode
{
    use HasChildren;

    protected static function tagName(): string
    {
        return 'tr';
    }
}
