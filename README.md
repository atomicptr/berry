# Berry HTML

No more context-switching, just build your HTML templates in PHP.

Berry is a PHP library for composing correct HTML strings with small element builders.

It fits especially well with hypermedia-focused applications: render HTML on the server, send HTML over the wire, and let the browser swap it into the page.

## Install

```bash
composer require berry/html
```

Requires PHP 8.3+.

Docs: https://berry.atomicptr.dev

## Usage

```php
<?php declare(strict_types=1);

require 'vendor/autoload.php';

use Berry\Element;
use Berry\Html\Enums\Rel;
use Berry\Html\HtmlTag;

use function Berry\Html\body;
use function Berry\Html\button;
use function Berry\Html\div;
use function Berry\Html\h1;
use function Berry\Html\head;
use function Berry\Html\header;
use function Berry\Html\html;
use function Berry\Html\link;
use function Berry\Html\main;
use function Berry\Html\p;
use function Berry\Html\script;
use function Berry\Html\title;

// Render a counter button.
// Clicking it sends a POST request back to the current script.
function counterButton(int $value): HtmlTag
{
    $nextValue = $value + 1;

    /** @var string $current */
    $current = $_SERVER['PHP_SELF'] ?? '/';

    return div()
        ->attr('hx-target', 'this')
        ->child(
            button()
                ->id('counter-button')
                ->attr('hx-post', "$current?counter=$nextValue")
                ->attr('hx-swap', 'outerHTML')
                ->text("+ $value")
        );
}

// Our page layout around the content.
// Includes Pico CSS and HTMX.
function layout(Element $content): Element
{
    return html()
        ->child(head()
            ->child(title()->text('Hello, Berry!'))
            ->child(link()
                ->rel(Rel::Stylesheet)
                ->href('https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css')))
        ->child(body()
            ->child(header())
            ->child(div()
                ->class('container')
                ->child($content))
            ->child(script()->src('https://cdnjs.cloudflare.com/ajax/libs/htmx/2.0.7/htmx.min.js')));
}

// For POST requests we only return the button HTML.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $value = $_GET['counter'] ?? '1';
    assert(is_string($value));

    $value = intval($value);

    echo counterButton($value)->toString();
    die();
}

// Otherwise render the full page.
echo layout(
    main()
        ->class('container')
        ->child(h1()->text('Hello, Berry!'))
        ->child(p()->text('This is an example page rendering HTML using Berry'))
        ->child(counterButton(1))
)->toString();
```

## What Berry Is Good At

- Building HTML views in PHP instead of switching into a template language
- Server-rendered components and HTML fragments
- Hypermedia-focused applications with tools like HTMX or Datastar
- Escaped text and attributes by default
- Views your editor and PHPStan can understand
- SVG and XML output

## What Berry Is Not

Berry is not trying to be a frontend framework. There is no client-side runtime or template compiler, just PHP rendering HTML.

## Docs

The full documentation lives at [berry.atomicptr.dev](https://berry.atomicptr.dev).

## Ecosystem

`berry/html` is the core package. Some optional integrations:

- [berry/symfony](https://github.com/berry-php/symfony) - Symfony integration
- [berry/htmx](https://github.com/berry-php/htmx) - HTMX integration
- [berry/alpinejs](https://github.com/berry-php/alpinejs) - Alpine.js integration

## License

MIT
