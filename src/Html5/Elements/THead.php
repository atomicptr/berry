<?php declare(strict_types=1);

namespace Berry\Html5\Elements;

use Berry\Html5\HtmlTag;

class THead extends HtmlTag
{
    public function __construct()
    {
        parent::__construct('thead');
    }
}
