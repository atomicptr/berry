<?php declare(strict_types=1);

namespace HyperKit\Html\Traits;

use HyperKit\Html\TextNode;
use Stringable;

trait HasText
{
    public function text(Stringable|string|int|float|bool|callable|null $text, bool $raw = false): static
    {
        if ($text === null) {
            return $this;
        }

        $value = is_callable($text)
            ? new TextNode((string) $text(), $raw)
            : new TextNode((string) $text, $raw);

        $this->children[] = $value;

        return $this;
    }

    public function raw(Stringable|string|int|float|bool|callable|null $text): static
    {
        return $this->text($text, true);
    }
}
