<?php declare(strict_types=1);

use HyperKit\Html\Html5\Enums\FormMethod;

use function HyperKit\Html\Html5\form;

test('form renders with action method', function () {
    expect(form()->action('/')->method(FormMethod::Post)->toString())->toBe('<form action="/" method="POST"></form>');
});
