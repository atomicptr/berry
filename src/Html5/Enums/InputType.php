<?php declare(strict_types=1);

namespace Berry\Html5\Enums;

enum InputType: string
{
    case Text = 'text';
    case Password = 'password';
    case Checkbox = 'checkbox';
    case Radio = 'radio';
    case File = 'file';
    case Submit = 'submit';
    case Reset = 'reset';
    case Button = 'button';
    case Hidden = 'hidden';
    case Email = 'email';
    case Number = 'number';
    case Date = 'date';
}
