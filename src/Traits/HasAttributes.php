<?php declare(strict_types=1);

namespace Berry\Traits;

use Stringable;

trait HasAttributes
{
    /** @var array<string, string> */
    protected array $attributes = [];

    public function attr(string $key, Stringable|string|int|float|bool $value): static
    {
        $this->attributes[$key] = (string) $value;
        return $this;
    }

    public function flag(string $key): static
    {
        $this->flags[$key] = true;
        return $this;
    }
}
