<?php

use function HyperKit\Html\Html5\div;
use function HyperKit\Html\Html5\img;

test('Node render simple div example', function () {
    $res = div()
        ->class('card bg-base-200')
        ->child(null)
        ->child(div()->class('card-body')->text('Hello, World!'))
        ->toString();
    expect($res)->toBe('<div class="card bg-base-200"><div class="card-body">Hello, World!</div></div>');
});

test('Node render simple img example', function () {
    $res = img()->src('https://example.com/image.png')->toString();
    expect($res)->toBe('<img src="https://example.com/image.png" />');
});
