<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Traits;

trait HasHref
{
    public function href(string $value): static
    {
        return $this->attr('href', $value);
    }
}
