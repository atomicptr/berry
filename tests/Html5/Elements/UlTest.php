<?php declare(strict_types=1);

use function HyperKit\Html\Html5\li;
use function HyperKit\Html\Html5\ul;

test('ul renders with li', function () {
    expect(ul()->child(li())->toString())->toBe('<ul><li></li></ul>');
});
