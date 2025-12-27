<?php declare(strict_types=1);

namespace Berry;

interface Renderable
{
    /**
     * @param string[] $buffer
     */
    public function renderInto(array &$buffer): void;

    public function toString(): string;
}
