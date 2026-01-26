<?php declare(strict_types=1);

namespace Berry\Traits;

use Berry\Escaper;
use Closure;
use Stringable;

trait HasText
{
    /**
     * @var array<string>|null
     */
    protected ?array $children = null;

    /**
     * Adds a text node to the element (escaped immediately)
     *
     * @param Stringable|string|int|float|bool|(Closure(): (string|int|float|bool|null))|null $text
     */
    public function text(Stringable|string|int|float|bool|Closure|null $text): static
    {
        if ($text instanceof Closure) {
            $text = $text();
        }

        if ($text === null) {
            return $this;
        }

        $this->children ??= [];
        $this->children[] = Escaper::escape((string) $text);

        return $this;
    }

    /**
     * Adds a raw text node to the element (unescaped)
     *
     * @param Stringable|string|int|float|bool|(Closure(): (string|int|float|bool|null))|null $text
     */
    public function unsafeRaw(Stringable|string|int|float|bool|Closure|null $text): static
    {
        if ($text instanceof Closure) {
            $text = $text();
        }

        if ($text === null) {
            return $this;
        }

        $this->children ??= [];
        $this->children[] = (string) $text;

        return $this;
    }
}
