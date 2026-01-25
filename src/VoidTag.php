<?php declare(strict_types=1);

namespace Berry;

class VoidTag extends AbstractTag
{
    public function toString(): string
    {
        $out = "<{$this->tagName()}";
        $out .= $this->renderAttributeList();
        $out .= ' />';

        return $out;
    }
}
