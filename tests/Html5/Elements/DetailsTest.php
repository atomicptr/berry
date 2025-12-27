<?php declare(strict_types=1);

use function HyperKit\Html\Html5\details;
use function HyperKit\Html\Html5\summary;

test('details renders open', function () {
    expect(details()->open()->child(summary()->text('Sum'))->toString())->toBe('<details open><summary>Sum</summary></details>');
});
