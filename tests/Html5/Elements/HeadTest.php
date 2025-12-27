<?php declare(strict_types=1);

use function HyperKit\Html\Html5\head;
use function HyperKit\Html\Html5\title;

test('head renders with child', function () {
    expect(head()->child(title())->toString())->toBe('<head><title></title></head>');
});
