<?php declare(strict_types=1);

namespace Berry;

class VoidTag extends AbstractTag
{
    public function toString(): string
    {
        $out = "<{$this->tagName}";
        
        if ($this->attributes !== null) {
            $out .= $this->renderAttributeList();
        }
        
        $out .= ' />';

        return $out;
    }
}
