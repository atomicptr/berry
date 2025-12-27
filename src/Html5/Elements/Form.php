<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Elements;

use HyperKit\Html\Html5\Enums\FormMethod;
use HyperKit\Html\Html5\BaseNode;
use HyperKit\Html\Traits\HasChildren;

class Form extends BaseNode
{
    use HasChildren;

    protected static function tagName(): string
    {
        return 'form';
    }

    public function action(string $value): static
    {
        return $this->attr('action', $value);
    }

    public function method(FormMethod $method): static
    {
        return $this->attr('method', $method->value);
    }

    public function acceptCharset(string $value): static
    {
        return $this->attr('accept-charset', $value);
    }

    public function autocomplete(bool $value): static
    {
        return $this->attr('autocomplete', $value ? 'on' : 'off');
    }
}
