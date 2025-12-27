<?php declare(strict_types=1);

namespace HyperKit\Html\Html5;

use HyperKit\Html\Html5\Traits\HasGlobalAttributes;
use HyperKit\Html\Node;

abstract class BaseNode extends Node
{
    use HasGlobalAttributes;
}
