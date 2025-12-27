<?php declare(strict_types=1);

namespace HyperKit\Html\Html5\Enums;

enum FormMethod: string
{
    case Get = 'GET';
    case Post = 'POST';
    case Dialog = 'dialog';
}
