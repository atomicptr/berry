<?php declare(strict_types=1);

namespace Berry\Html5\Elements;

use Berry\Html5\BaseNode;
use Berry\Traits\HasText;

class Option extends BaseNode
{
    use HasText;

    protected static function tagName(): string
    {
        return 'option';
    }

    public function value(string $value): static
    {
        return $this->attr('value', $value);
    }

    public function selected(): static
    {
        return $this->flag('selected');
    }

    public function disabled(): static
    {
        return $this->flag('disabled');
    }
}
