<?php declare(strict_types=1);

namespace Berry\Contract;

use Stringable;

interface HasAttributesContract
{
    public function attr(string $key, Stringable|string|int|float|bool $value): static;
    public function flag(string $key): static;

    /**
     * @return array<string, string|true>
     */
    public function getAttributes(): array;
}
