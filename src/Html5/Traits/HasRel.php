<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Traits;

use HyperKit\Html\Html5\Enums\Rel;

trait HasRel
{
    public function rel(Rel $rel): static
    {
        return $this->attr('rel', $rel->value);
    }
}
