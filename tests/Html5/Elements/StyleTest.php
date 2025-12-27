<?php declare(strict_types=1);

use function HyperKit\Html\Html5\style;

test('style renders with text', function () {
    expect(style()->text('body{}')->toString())->toBe('<style>body{}</style>');
});
