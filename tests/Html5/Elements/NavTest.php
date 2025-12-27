<?php declare(strict_types=1);

use function HyperKit\Html\Html5\a;
use function HyperKit\Html\Html5\nav;

test('nav renders with child', function () {
    expect(nav()->child(a())->toString())->toBe('<nav><a></a></nav>');
});
