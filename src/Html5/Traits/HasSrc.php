<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Traits;

use HyperKit\Html\Traits\HasAttributes;

trait HasSrc
{
    use HasAttributes;

    public function src(string $src): static
    {
        return $this->attr('src', $src);
    }
}
