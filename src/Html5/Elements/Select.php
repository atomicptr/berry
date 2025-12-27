<?php declare(strict_types=1);

namespace Berry\Html5\Elements;

use Berry\Html5\BaseNode;
use Berry\Traits\HasChildren;

class Select extends BaseNode
{
    use HasChildren;

    protected static function tagName(): string
    {
        return 'select';
    }

    public function name(string $value): static
    {
        return $this->attr('name', $value);
    }

    public function disabled(): static
    {
        return $this->flag('disabled');
    }

    public function multiple(): static
    {
        return $this->flag('multiple');
    }

    public function autocomplete(bool $value): static
    {
        return $this->attr('autocomplete', $value ? 'on' : 'off');
    }
}
