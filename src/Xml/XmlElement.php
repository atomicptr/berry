<?php declare(strict_types=1);

namespace Berry\Xml;

class XmlElement extends XmlTag
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }
}
