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

    /**
     * @param string[] $buffer
     */
    public function renderInto(array &$buffer): void
    {
        $buffer[] = '<!DOCTYPE html>';
        parent::renderInto($buffer);
    }

    public function lang(string $lang): static
    {
        return $this->attr('lang', $lang);
    }
}
