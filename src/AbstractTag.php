<?php declare(strict_types=1);

namespace Berry;

use Berry\Contract\HasAttributesContract;
use Berry\Contract\HasExtensionMethodsContract;
use Berry\Rendering\Escaper;
use Berry\Traits\HasAttributes;
use Berry\Traits\HasExtensionMethods;
use Closure;

abstract class AbstractTag implements Element, HasAttributesContract, HasExtensionMethodsContract
{
    use HasAttributes;
    use HasExtensionMethods;

    /** @var array<class-string, string> */
    private static array $tagNameMap = [];

    public function __construct(string $tagName)
    {
        // cache tag name per subclass to avoid per-instance property
        self::$tagNameMap[static::class] = $tagName;
    }

    protected function tagName(): string
    {
        return self::$tagNameMap[static::class] ?? '';
    }

    /**
     * @param Closure(static): static $fn
     */
    public function map(Closure $fn): static
    {
        return $fn($this);
    }

    /**
     * @param (Closure(): bool)|bool $condition
     * @param Closure(static): static $fn
     * @param (Closure(static): static)|null $else
     */
    public function mapWhen(Closure|bool $condition, Closure $fn, ?Closure $else = null): static
    {
        if ($condition instanceof Closure) {
            return $this->mapWhen($condition(), $fn, $else);
        }

        if ($condition) {
            return $fn($this);
        } elseif ($else !== null) {
            return $else($this);
        }

        return $this;
    }

    protected function renderAttributeList(): string
    {
        $out = '';

        foreach ($this->getAttributes() as $key => $value) {
            $key = Escaper::escapeAttributeName(strval($key));

            // if the string was escaped away, skip it
            if (strlen($key) === 0) {
                continue;
            }

            // flags
            if ($value === true) {
                $out .= " $key";
                continue;
            }

            $escaped = Escaper::escape($value);
            $out .= " {$key}=\"{$escaped}\"";
        }

        return $out;
    }

    public function __toString(): string
    {
        return $this->toString();
    }
}
