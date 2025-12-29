<?php declare(strict_types=1);

namespace Berry\Traits;

use Berry\Debug\BerryInspector;
use Berry\Debug\Inspector;
use Berry\Renderable;

/**
 * @phpstan-import-type DebugFrame from Inspector
 */
trait HasInspector
{
    /** @var array<Renderable|null> */
    protected array $children = [];

    /**
     * Returns an inspector for the current element
     *
     * @param DebugFrame[]|null $stacktrace
     */
    public function inspector(?Inspector $inspector = null, ?array $stacktrace = null): Renderable
    {
        $inspector ??= new BerryInspector();
        return $inspector->dump($this, $stacktrace ?? debug_backtrace());
    }

    /**
     * Dump an inspector for the current element as a child (if possible) otherwise just print it
     *
     * @param DebugFrame[]|null $stacktrace
     */
    public function dump(bool $dumpAsChild = false, ?Inspector $inspector = null, ?array $stacktrace = null): static
    {
        $inspector = $this->inspector($inspector, $stacktrace ?? debug_backtrace());

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
     *
     * @param DebugFrame[]|null $stacktrace
     * @return never
     */
    public function dd(?Inspector $inspector = null, ?array $stacktrace = null): never
    {
        $inspector = $this->inspector($inspector, $stacktrace ?? debug_backtrace());
        die($inspector->toString());
    }
}
