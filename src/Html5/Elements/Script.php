<?php declare(strict_types=1);

namespace Berry\Html5\Elements;

use Berry\Html5\Traits\HasSrc;
use Berry\Html5\BaseNode;
use Berry\Traits\HasText;

class Script extends BaseNode
{
    use HasText;
    use HasSrc;

    protected static function tagName(): string
    {
        return 'script';
    }

    public function async(): static
    {
        return $this->flag('async');
    }

    public function defer(): static
    {
        return $this->flag('defer');
    }

    public function integrity(string $value): static
    {
        return $this->attr('integrity', $value);
    }

    public function type(string $value): static
    {
        return $this->attr('type', $value);
    }
}
