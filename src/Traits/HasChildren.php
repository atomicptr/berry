<?php declare(strict_types=1);

namespace Berry\Traits;

use Berry\Renderable;

trait HasChildren
{
    /** @var Renderable[] */
    protected array $children = [];

    /**
     * @param Renderable|(callable(): Renderable)|null $child
     */
    public function child(Renderable|callable|null $child): self
    {
        if ($child === null) {
            return $this;
        }

        if (is_callable($child)) {
            $child = $child();

            if ($child === null) {
                return $this;
            }

            assert($child instanceof Renderable);
        }

        $this->children[] = $child;

        return $this;
    }

    /**
     * @param (callable(): bool)|bool $condition
     * @param Renderable|(callable(): Renderable)|null $child
     */
    public function childWhen(callable|bool $condition, Renderable|callable|null $child): self
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
