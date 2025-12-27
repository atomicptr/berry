<?php declare(strict_types=1);

namespace HyperKit\Html\Contracts;

use HyperKit\Html\Node;

interface HasChildrenContract
{
    public function child(Node|callable|null $child): self;
    public function childWhen(callable|bool $condition, Node|callable|null $child): self;
}
