<?php declare(strict_types=1);

namespace Berry\Traits;

use Berry\Debug\BerryInspector;
use Berry\Debug\Inspector;
use Berry\Renderable;

trait HasInspector
{
    /** @var array<Renderable|null> */
    protected array $children = [];

    /**
     * Returns an inspector for the current element
     */
    public function inspector(?Inspector $inspector = null): Renderable
    {
        $inspector ??= new BerryInspector();
        return $inspector->dump($this, debug_backtrace());
    }

    /**
     * Dump an inspector for the current element as a child (if possible) otherwise just print it
     */
    public function dump(bool $dumpAsChild = false, ?Inspector $inspector = null): static
    {
        $inspector = $this->inspector($inspector);

        // only use dumpAsChild for elements having `HasChildren`
        if (method_exists($this, 'child') && $dumpAsChild) {
            $this->children[] = $inspector;
        } else {
            echo $inspector->toString();
        }

        return $this;
    }

    /**
     * Dump an inspector for the current element to the page and stop rendering
     */
    public function dd(?Inspector $inspector = null): never
    {
        $inspector = $this->inspector($inspector);
        die($inspector->toString());
    }
}
