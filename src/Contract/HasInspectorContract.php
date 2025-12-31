<?php declare(strict_types=1);

namespace Berry\Contract;

use Berry\Inspector\Inspector;
use Berry\Element;

/**
 * @phpstan-import-type DebugFrame from Inspector
 */
interface HasInspectorContract
{
    /**
     * Returns an inspector for the current element
     *
     * @param DebugFrame[]|null $stacktrace
     */
    public function inspector(?Inspector $inspector = null, ?array $stacktrace = null): Element;

    /**
     * Dump an inspector for the current element as a child (if possible) otherwise just print it
     *
     * @param DebugFrame[]|null $stacktrace
     */
    public function dump(bool $dumpAsChild = false, ?Inspector $inspector = null, ?array $stacktrace = null): static;

    /**
     * Dump an inspector for the current element to the page and stop rendering
     *
     * @param DebugFrame[]|null $stacktrace
     * @return never
     */
    public function dd(?Inspector $inspector = null, ?array $stacktrace = null): never;
}
