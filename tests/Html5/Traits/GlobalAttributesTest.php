<?php declare(strict_types=1);

use function HyperKit\Html\Html5\div;

test('Data attributes', function () {
    $res = div()->id('my-div')->data('elem-id', 42)->toString();
    expect($res)->toBe('<div id="my-div" data-elem-id="42"></div>');
});
