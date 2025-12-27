<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Elements;

use HyperKit\Html\Html5\Traits\HasHref;
use HyperKit\Html\Html5\BaseNode;
use HyperKit\Html\Traits\HasChildren;
use HyperKit\Html\Traits\HasText;

class A extends BaseNode
{
    use HasChildren;
    use HasText;
    use HasHref;

    protected static function tagName(): string
    {
        return 'a';
    }

    public function download(): static
    {
        return $this->flag('download');
    }
}
