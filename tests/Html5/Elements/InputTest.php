<?php declare(strict_types=1);

use HyperKit\Html\Html5\Enums\InputType;

use function HyperKit\Html\Html5\input;

test('input renders type name', function () {
    expect(input()->type(InputType::Text)->name('user')->toString())->toBe('<input type="text" name="user" />');
});

test('input renders checked', function () {
    expect(input()->type(InputType::Checkbox)->checked()->toString())->toBe('<input type="checkbox" checked />');
});
