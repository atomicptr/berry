# HyperKit HTML

No dependency, fast PHP eDSL for writing HTML

Inspired by [lira](https://github.com/atomicptr/lira)

## Usage

```php
<?php declare(strict_types=1);

namespace App\View;

use HyperKit\Html\Renderable;

use function HyperKit\Html\Html5\html;
use function HyperKit\Html\Html5\head;
use function HyperKit\Html\Html5\body;
use function HyperKit\Html\Html5\div;

class IndexView
{
    public static function render(): Renderable
    {
        return html()
            ->lang('en')
            ->child(head()
                ->child(title()->text("Index Page")))
            ->child(body()
                ->child(
                    div()
                        ->class("container")
                        ->child(
                            h1()->text("Index Page")))
                ->child(
                    footer()->text("This is a footer")));
    }
}

```

## License

MIT
