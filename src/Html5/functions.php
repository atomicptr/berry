<?php declare(strict_types=1);

namespace HyperKit\Html\Html5;

use HyperKit\Html\Html5\Elements\Div;
use HyperKit\Html\Html5\Elements\Img;

function div(): Div
{
    return new Div();
}

function img(): Img
{
    return new Img();
}

