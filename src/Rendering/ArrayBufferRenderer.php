<?php declare(strict_types=1);

namespace Berry\Rendering;

class ArrayBufferRenderer implements StringRenderer
{
    /** @var string[] */
    private array $buffer = [];

    public function write(string $content): void
    {
        $this->buffer[] = $content;
    }

    public function renderToString(): string
    {
        return implode('', $this->buffer);
    }
}
