<?php declare(strict_types=1);

use function HyperKit\Html\Html5\article;
use function HyperKit\Html\Html5\p;

test('article renders with child', function () {
    expect(article()->child(p()->text('Text'))->toString())->toBe('<article><p>Text</p></article>');
});
