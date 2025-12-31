<?php declare(strict_types=1);

namespace Berry\Rendering;

class DirectOutputRenderer implements Renderer
{
    public function write(string $content): void
    {
        echo $content;
    }
}
