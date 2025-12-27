<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Enums;

enum Target: string
{
    case Self = '_self';
    case Blank = '_blank';
    case Parent = '_parent';
    case Top = '_top';
}
