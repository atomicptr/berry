<?php declare(strict_types=1);

namespace Berry\Html5\Elements;

use Berry\Html5\Enums\Rel;
use Berry\Html5\HtmlVoidTag;

class Link extends HtmlVoidTag
{
    public function __construct()
    {
        parent::__construct('link');
    }

    public function href(string $href): static
    {
        return $this->attr('href', $href);
    }

    public function rel(Rel|string $rel): static
    {
        if (is_string($rel)) {
            $rel = Rel::from($rel);
        }

        return $this->attr('rel', $rel->value);
    }

    public function integrity(string $value): static
    {
        return $this->attr('integrity', $value);
    }
}
