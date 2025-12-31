<?php declare(strict_types=1);

namespace Berry;

abstract class Layout extends Component
{
    /** @var array<string, Element|null> */
    protected array $slots = [];

    public function slot(string $name, Element|null $content): static
    {
        $this->slots[$name] = $content;
        return $this;
    }

    public function renderSlot(string $name): Element|null
    {
        return $this->slots[$name] ?? null;
    }
}
