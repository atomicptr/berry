<?php declare(strict_types=1);

use function HyperKit\Html\Html5\summary;

test('summary renders with text', function () {
    expect(summary()->text('Sum')->toString())->toBe('<summary>Sum</summary>');
});
