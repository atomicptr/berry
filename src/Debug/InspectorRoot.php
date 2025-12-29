<?php declare(strict_types=1);

namespace Berry\Debug;

use Berry\Contracts\ExcludeFromArrayRepresentation;
use Berry\Traits\HasChildren;
use Berry\Node;

/**
 * A special root container for the inspector
 */
final class InspectorRoot extends Node implements ExcludeFromArrayRepresentation
{
    use HasChildren;

    protected static function tagName(): string
    {
        return 'debug';
    }
}
