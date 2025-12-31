<?php declare(strict_types=1);

namespace Berry\Rendering;

interface Renderer
{
    /**
     * Write $content
     */
    public function write(string $content): void;
}
