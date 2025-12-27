<?php declare(strict_types=1);

use function HyperKit\Html\Html5\small;

test('small renders with text', function () {
    expect(small()->text('small')->toString())->toBe('<small>small</small>');
});
