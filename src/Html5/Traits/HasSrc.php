<?php declare(strict_types=1);

namespace Berry\Html5\Traits;

use Berry\Traits\HasAttributes;

trait HasSrc
{
    use HasAttributes;

    public function src(string $src): static
    {
        return $this->attr('src', $src);
    }
}
