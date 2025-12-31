<?php declare(strict_types=1);

namespace Berry\Contract;

use Berry\Rendering\StringRenderer;
use Stringable;

interface IsRenderableContract extends Stringable
{
    public function toString(?StringRenderer $renderer = null): string;
}
