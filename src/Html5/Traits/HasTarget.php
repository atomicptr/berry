<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Traits;

use HyperKit\Html\Html5\Enums\Target;

trait HasTarget
{
    public function target(Target $target): static
    {
        return $this->attr('target', $target->value);
    }
}
