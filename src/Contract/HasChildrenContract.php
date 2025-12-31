<?php declare(strict_types=1);

namespace Berry\Contract;

use Berry\Element;
use Closure;

interface HasChildrenContract
{
    /**
     * @param Element|(Closure(): Element)|null $child
     */
    public function child(Element|Closure|null $child): static;

    /**
     * @param (Closure(): bool)|bool $condition
     * @param Element|(Closure(): Element)|null $child
     */
    public function childWhen(Closure|bool $condition, Element|Closure|null $child): static;

    /**
     * @param array<Element|null>|(Closure(): array<Element|null>) $children
     */
    public function children(array|Closure $children): static;

    /**
     * @return array<Element|null>
     */
    public function getChildren(): array;
}
