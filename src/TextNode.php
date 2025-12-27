<?php declare(strict_types=1);

namespace HyperKit\Html;

use RuntimeException;

final class TextNode extends Node
{
    public function __construct(
        private string $text,
        private bool $raw = false,
    ) {}

    /**
     * @return never
     */
    protected static function tagName(): string
    {
        throw new RuntimeException("Text nodes don't have a tag");
    }

    protected function renderIntoBuffer(array &$buffer): void
    {
        if ($this->raw) {
            $buffer[] = $this->text;
            return;
        }

        $buffer[] = htmlspecialchars($this->text);
    }
}
