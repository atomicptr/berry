<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Elements;

use HyperKit\Html\Html5\BaseNode;
use HyperKit\Html\Traits\HasChildren;
use HyperKit\Html\Traits\HasText;

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
