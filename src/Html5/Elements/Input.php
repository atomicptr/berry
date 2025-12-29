<?php declare(strict_types=1);

namespace Berry\Html5\Elements;

use Berry\Html5\Enums\InputType;
use Berry\Html5\BaseNode;

class Input extends BaseNode
{
    protected static function tagName(): string
    {
        return 'input';
    }

    protected static function isSelfClosing(): bool
    {
        return true;
    }

    public function type(InputType $type): static
    {
        return $this->attr('type', $type->value);
    }

    public function name(string $value): static
    {
        return $this->attr('name', $value);
    }

    public function value(string $value): static
    {
        return $this->attr('value', $value);
    }

    public function checked(): static
    {
        return $this->flag('checked');
    }

    public function accept(string $value): static
    {
        return $this->attr('accept', $value);
    }

    public function capture(): static
    {
        return $this->flag('capture');
    }

    public function autocomplete(bool $value): static
    {
        return $this->attr('autocomplete', $value ? 'on' : 'off');
    }

    public function placeholder(string $placeholder): static
    {
        return $this->attr('placeholder', $placeholder);
    }
}
