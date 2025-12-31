<?php declare(strict_types=1);

namespace Berry;

use Berry\Rendering\Renderer;

interface Element
{
    public function render(Renderer $renderer): void;
}
