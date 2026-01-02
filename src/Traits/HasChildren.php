<?php declare(strict_types=1);

namespace Berry\Traits;

use Berry\Element;
use Closure;

trait HasChildren
{
    /** @var array<Element|null> */
    protected array $children = [];

    public function child(Element|Closure|null $child): static
    {
        if ($child instanceof Closure) {
            $child = $child();
        }

        if ($child === null) {
            return $this;
        }

        $this->children[] = $child;

        return $this;
    }

    public function childWhen(Closure|bool $condition, Element|Closure|null $child): static
    {
        if ($condition instanceof Closure) {
            return $this->childWhen($condition(), $child);
        }

        if ($condition) {
            return $this->child($child);
        }

        return $this;
    }

    public function children(array|Closure $children, Element|Closure|null $else = null): static
    {
        if ($children instanceof Closure) {
            $children = $children();
        }

        if (count($children) === 0) {
            $this->child($else);

            return $this;
        }

        array_push($this->children, ...$children);
        return $this;
    }

    public function getChildren(): array
    {
        return $this->children;
    }
}
