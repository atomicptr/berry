<?php declare(strict_types=1);

use function HyperKit\Html\Html5\script;

test('script renders src async', function () {
    expect(script()->src('js')->async()->toString())->toBe('<script src="js" async></script>');
});
