<?php declare(strict_types=1);

namespace Berry;

use Berry\Traits\HasAttributes;

abstract class Node implements Renderable
{
    use HasAttributes;

    /**
     * @var array<string, string>
     */
    protected array $attributes = [];

    /**
     * @var array<string, true>
     */
    protected array $flags = [];

    /**
     * @var Renderable[]
     */
    protected array $children = [];

    abstract protected static function tagName(): string;

    protected static function isSelfClosing(): bool
    {
        return false;
    }

    /**
     * @param string[] $buffer
     */
    public function renderInto(array &$buffer): void
    {
        $tagName = static::tagName();
        $buffer[] = "<{$tagName}";

        foreach ($this->attributes as $key => $value) {
            $value = htmlspecialchars($value);
            $buffer[] = " {$key}=\"{$value}\"";
        }

        foreach ($this->flags as $flag => $_) {
            $buffer[] = " {$flag}";
        }

        if (static::isSelfClosing()) {
            $buffer[] = ' />';

            return;
        }

        $buffer[] = '>';

        foreach ($this->children as $child) {
            $child->renderInto($buffer);
        }

        $buffer[] = "</{$tagName}>";
    }

    public function toString(): string
    {
        $parts = [];
        $this->renderInto($parts);
        return implode('', $parts);
    }
}
