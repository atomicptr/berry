<?php declare(strict_types=1);

use function HyperKit\Html\Html5\hr;

test('hr renders self-closing', function () {
    expect(hr()->toString())->toBe('<hr />');
});
