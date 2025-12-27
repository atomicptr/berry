<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Elements;

use HyperKit\Html\Html5\BaseNode;
use HyperKit\Html\Traits\HasText;

class TextArea extends BaseNode
{
    use HasText;

    protected static function tagName(): string
    {
        return 'textarea';
    }

    public function name(string $value): static
    {
        return $this->attr('name', $value);
    }

    public function rows(int $value): static
    {
        return $this->attr('rows', (string) $value);
    }

    public function cols(int $value): static
    {
        return $this->attr('cols', (string) $value);
    }

    public function disabled(): static
    {
        return $this->flag('disabled');
    }

    public function autocomplete(bool $value): static
    {
        return $this->attr('autocomplete', $value ? 'on' : 'off');
    }
}
