<?php declare(strict_types=1);

use function HyperKit\Html\Html5\i;

test('i renders with text', function () {
    expect(i()->text('italic')->toString())->toBe('<i>italic</i>');
});
