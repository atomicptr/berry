<?php

use HyperKit\Html\Renderable;

use function HyperKit\Html\Html5\b;
use function HyperKit\Html\Html5\body;
use function HyperKit\Html\Html5\div;
use function HyperKit\Html\Html5\footer;
use function HyperKit\Html\Html5\h1;
use function HyperKit\Html\Html5\head;
use function HyperKit\Html\Html5\html;
use function HyperKit\Html\Html5\img;
use function HyperKit\Html\Html5\li;
use function HyperKit\Html\Html5\title;
use function HyperKit\Html\Html5\ul;

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

test('Arbitrary attributes', function () {
    expect(div()->attr('my-cool-attribute', '1337')->toString())->toBe('<div my-cool-attribute="1337"></div>');
});

test('Arbitrary flags', function () {
    expect(div()->flag('my-cool-flag')->toString())->toBe('<div my-cool-flag></div>');
});

test('Rendering text', function () {
    expect(div()->text('<b>This should be escaped</b>')->toString())->toBe('<div>&lt;b&gt;This should be escaped&lt;/b&gt;</div>');
});

test('Rendering raw text', function () {
    expect(div()->raw('<b>This should not be escaped</b>')->toString())->toBe('<div><b>This should not be escaped</b></div>');
});

test('Add child func', function () {
    expect(
        div()->child(fn() => b()->text('Hello, World'))->toString()
    )->toBe('<div><b>Hello, World</b></div>');
});

test('Add text func', function () {
    expect(
        div()->child(b()->text(fn() => 'Hello, World'))->toString()
    )->toBe('<div><b>Hello, World</b></div>');
});

test('Add multiple texts', function () {
    expect(
        b()
            ->text('Hello')
            ->text(null)
            ->text(' ')
            ->text('World')
            ->toString()
    )->toBe('<b>Hello World</b>');
});

test('Add children conditionally', function () {
    expect(
        ul()
            ->childWhen(false, li()->text('This should not appear'))
            ->childWhen(fn() => false, li()->text('This should not appear either'))
            ->childWhen(true, li()->text('This should'))
            ->childWhen(fn() => true, li()->text('This should too'))
            ->toString()
    )->toBe('<ul><li>This should</li><li>This should too</li></ul>');
});

class IndexView
{
    public static function render(): Renderable
    {
        return html()
            ->lang('en')
            ->child(head()
                ->child(title()->text('Index Page')))
            ->child(body()
                ->child(
                    div()
                        ->class('container')
                        ->child(
                            h1()->text('Index Page')
                        )
                )
                ->child(
                    footer()->text('This is a footer')
                ));
    }
}

test('README.md example', function () {
    expect(IndexView::render()->toString())->toBe('<!DOCTYPE html><html lang="en"><head><title>Index Page</title></head><body><div class="container"><h1>Index Page</h1></div><footer>This is a footer</footer></body></html>');
});
