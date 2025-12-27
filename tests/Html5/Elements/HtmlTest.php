<?php declare(strict_types=1);

use function HyperKit\Html\Html5\body;
use function HyperKit\Html\Html5\head;
use function HyperKit\Html\Html5\html;

test('html renders with children', function () {
    expect(html()->child(head())->child(body())->toString())->toBe('<!DOCTYPE html><html><head></head><body></body></html>');
});
