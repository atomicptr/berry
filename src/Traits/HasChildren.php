<?php declare(strict_types=1);

namespace Berry\Traits;

use Berry\Element;
use Closure;

trait HasChildren
{
    protected string $body = '';

    public function child(Element|Closure|null $child): static
    {
        if ($child === null) {
            return $this;
        }

        if ($child instanceof Closure) {
            $child = $child();
            if ($child === null) {
                return $this;
            }
        }

        $this->body .= $child->toString();

        return $this;
    }

    public function childWhen(Closure|bool $condition, Closure $child, ?Closure $else = null): static
    {
        if ($condition instanceof Closure) {
            return $this->childWhen($condition(), $child, $else);
        }

        if ($condition) {
            return $this->child($child);
        } elseif ($else !== null) {
            return $this->child($else);
        }

        return $this;
    }

    public function children(array|Closure $children, Element|Closure|null $else = null): static
    {
        if ($children instanceof Closure) {
            $children = $children();
        }

        if (count($children) === 0) {
            return $this->child($else);
        }

        foreach ($children as $c) {
            $this->child($c);
        }

        return $this;
    }
}
