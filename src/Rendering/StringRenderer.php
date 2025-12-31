<?php declare(strict_types=1);

namespace Berry\Rendering;

interface StringRenderer extends Renderer
{
    /**
     * Render internal state to string
     */
    public function renderToString(): string;
}
