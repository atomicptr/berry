<?php declare(strict_types=1);

use function HyperKit\Html\Html5\main;
use function HyperKit\Html\Html5\p;

test('main renders with child', function () {
    expect(main()->child(p())->toString())->toBe('<main><p></p></main>');
});
