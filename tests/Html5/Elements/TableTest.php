<?php declare(strict_types=1);

use function HyperKit\Html\Html5\table;
use function HyperKit\Html\Html5\tbody;
use function HyperKit\Html\Html5\td;
use function HyperKit\Html\Html5\tfoot;
use function HyperKit\Html\Html5\th;
use function HyperKit\Html\Html5\thead;
use function HyperKit\Html\Html5\tr;

test('table renders with child', function () {
    expect(
        table()
            ->child(thead()->child(th()->text('Col')))
            ->child(tbody()->child(tr()->child(td()->text('Hello, Table'))))
            ->child(tfoot()->child(tr()->child(td()->text('Foot'))))
            ->toString()
    )->toBe('<table><thead><th>Col</th></thead><tbody><tr><td>Hello, Table</td></tr></tbody><tfoot><tr><td>Foot</td></tr></tfoot></table>');
});
