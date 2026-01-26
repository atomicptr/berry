<?php declare(strict_types=1);

namespace Berry;

use Berry\Contract\HasChildrenContract;
use Berry\Traits\HasChildren;

class Tag extends AbstractTag implements HasChildrenContract
{
    use HasChildren;

    public function toString(): string
    {
        $out = "<{$this->tagName}";
        
        if ($this->attributes !== null) {
            $out .= $this->renderAttributeList();
        }
        
        $out .= '>';

        $out .= implode('', $this->children ?? []);

        $out .= "</{$this->tagName}>";

        return $out;
    }
}
