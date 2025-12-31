<?php declare(strict_types=1);

namespace Berry\Traits;

use Berry\Rendering\ArrayBufferRenderer;
use Berry\Rendering\StringRenderer;

trait Renderable
{
    public function toString(?StringRenderer $renderer = null): string
    {
        $renderer ??= new ArrayBufferRenderer();

        // $this is an Element
        $this->render($renderer);

        return $renderer->renderToString();
    }

    public function __toString(): string
    {
        return $this->toString();
    }
}
