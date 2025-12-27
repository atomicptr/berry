<?php declare(strict_types=1);

use function HyperKit\Html\Html5\li;
use function HyperKit\Html\Html5\ol;

test('ol renders with li', function () {
    expect(ol()->child(li())->toString())->toBe('<ol><li></li></ol>');
});
