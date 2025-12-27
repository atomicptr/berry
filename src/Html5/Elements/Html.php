<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Elements;

use HyperKit\Html\Traits\HasChildren;
use HyperKit\Html\Node;

class Html extends Node
{
    use HasChildren;

    protected static function tagName(): string
    {
        return 'html';
    }

    protected function renderIntoBuffer(array &$buffer): void
    {
        $buffer[] = '<!DOCTYPE html>';
        parent::renderIntoBuffer($buffer);
    }
}
