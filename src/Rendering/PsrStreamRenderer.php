<?php declare(strict_types=1);

namespace Berry\Rendering;

use Psr\Http\Message\StreamInterface;

class PsrStreamRenderer implements Renderer
{
    public function __construct(
        private StreamInterface $stream
    ) {}

    public function write(string $content): void
    {
        $this->stream->write($content);
    }
}
