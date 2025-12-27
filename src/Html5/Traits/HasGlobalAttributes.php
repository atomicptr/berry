<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Traits;

use HyperKit\Html\Traits\HasAttributes;

trait HasGlobalAttributes
{
    use HasAttributes;

    public function id(string $id): static
    {
        return $this->attr('id', $id);
    }

    public function class(string $class): static
    {
        return $this->attr('class', $class);
    }
}
