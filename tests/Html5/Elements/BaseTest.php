<?php declare(strict_types=1);

use HyperKit\Html\Html5\Enums\Target;

use function HyperKit\Html\Html5\base;

test('base renders with href and target', function () {
    expect(base()->href('/')->target(Target::Blank)->toString())->toBe('<base href="/" target="_blank" />');
});
