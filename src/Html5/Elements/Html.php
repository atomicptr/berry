<?php declare(strict_types=1);

namespace Berry\Html5\Elements;

use Berry\Traits\HasChildren;
use Berry\Node;

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

    public function lang(string $lang): static
    {
        return $this->attr('lang', $lang);
    }
}
