<?php declare(strict_types=1);

namespace Berry\Html5\Traits;

use Berry\Html5\Enums\Target;

trait HasTarget
{
    public function target(Target $target): static
    {
        return $this->attr('target', $target->value);
    }
}
