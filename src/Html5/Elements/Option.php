<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Elements;

use HyperKit\Html\Html5\BaseNode;
use HyperKit\Html\Traits\HasText;

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
