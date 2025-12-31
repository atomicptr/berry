<?php declare(strict_types=1);

namespace Berry;

/**
 * Render a text node
 */
function text(string $text): Text
{
    return new Text($text);
}

/**
 * Render a text node without escaping
 */
function unsafeRawText(string $raw): UnsafeRawText
{
    return new UnsafeRawText($raw);
}

/**
 * Render multiple elements without a parent node
 */
function fragment(Element ...$children): Fragment
{
    return (new Fragment())->children($children);
}
