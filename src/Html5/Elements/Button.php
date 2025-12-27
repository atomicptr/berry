<?php declare(strict_types=1);

namespace Berry\Html5\Elements;

use Berry\Html5\BaseNode;
use Berry\Traits\HasChildren;
use Berry\Traits\HasText;

class Button extends BaseNode
{
    use HasChildren;
    use HasText;

    protected static function tagName(): string
    {
        return 'button';
    }

    public function type(string $value): static
    {
        return $this->attr('type', $value);
    }

    public function name(string $value): static
    {
        return $this->attr('name', $value);
    }

    public function value(string $value): static
    {
        return $this->attr('value', $value);
    }

    public function disabled(): static
    {
        return $this->flag('disabled');
    }
}
