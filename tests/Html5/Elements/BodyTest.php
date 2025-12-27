<?php declare(strict_types=1);

use function HyperKit\Html\Html5\body;
use function HyperKit\Html\Html5\div;

test('body renders with child', function () {
    expect(body()->child(div())->toString())->toBe('<body><div></div></body>');
});
