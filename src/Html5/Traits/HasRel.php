<?php declare(strict_types=1);

namespace Berry\Html5\Traits;

use Berry\Html5\Enums\Rel;

trait HasRel
{
    public function rel(Rel $rel): static
    {
        return $this->attr('rel', $rel->value);
    }
}
