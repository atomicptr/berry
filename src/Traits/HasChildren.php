<?php declare(strict_types=1);

namespace HyperKit\Html\Traits;

use HyperKit\Html\Node;

trait HasChildren
{
    /** @var Node[] */
    protected array $children = [];

    public function child(Node|callable|null $child): self
    {
        if ($child === null) {
            return $this;
        }

        $this->children[] = is_callable($child)
            ? $child()
            : $child;

        return $this;
    }

    public function childWhen(callable|bool $condition, Node|callable|null $child): self
    {
        if (is_callable($condition)) {
            if ($condition()) {
                return $this->child($child);
            }

            return $this;
        }

        if ($condition) {
            return $this->child($child);
        }

        return $this;
    }
}
