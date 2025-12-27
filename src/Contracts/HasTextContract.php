<?php declare(strict_types=1);

namespace HyperKit\Html\Contracts;

use Stringable;

interface HasTextContract
{
    public function text(Stringable|string|int|float|bool|callable|null $text, bool $raw = false): self;
    public function raw(Stringable|string|int|float|bool|callable|null $text): self;
}
