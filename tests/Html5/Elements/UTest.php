<?php declare(strict_types=1);

use function HyperKit\Html\Html5\u;

test('u renders with text', function () {
    expect(u()->text('underline')->toString())->toBe('<u>underline</u>');
});
