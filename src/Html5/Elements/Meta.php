<?php declare(strict_types=1);

namespace Berry\Html5\Elements;

use Berry\Node;

class Meta extends Node
{
    protected static function tagName(): string
    {
        return 'meta';
    }

    protected static function isSelfClosing(): bool
    {
        return true;
    }

    public function charset(string $value): static
    {
        return $this->attr('charset', $value);
    }

    public function content(string $value): static
    {
        return $this->attr('content', $value);
    }

    public function httpEquiv(string $value): static
    {
        return $this->attr('http-equiv', $value);
    }

    public function media(string $value): static
    {
        return $this->attr('media', $value);
    }

    public function name(string $value): static
    {
        return $this->attr('name', $value);
    }
}
