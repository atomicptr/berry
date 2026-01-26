<?php declare(strict_types=1);

namespace Berry\Tests\Benchmark;

use Berry\Escaper;

use function Berry\Html\div;

/**
 * @BeforeMethods({"setUp"})
 * @Revs(10)
 */
final class LotsOfAttributesBench
{
    private const int NUM_ATTRS = 500_000;

    /** @var array<string, string> */
    private array $attributes = [];

    public function setUp(): void
    {
        for ($i = 0; $i < self::NUM_ATTRS; $i++) {
            $key = uniqid('attr-', true);

            $this->attributes[$key] = hash('md5', $key);
        }
    }

    public function benchCreateElement(): void
    {
        $div = div();

        foreach ($this->attributes as $key => $value) {
            $div->attr($key, $value);
        }

        $div->toString();
    }

    public function benchPhpCreateElement(): void
    {
        $div = '<div';

        foreach ($this->attributes as $key => $value) {
            $key = Escaper::escapeAttributeName($key);
            $value = Escaper::escape($value);

            $div .= " $key=\"$value\"";
        }

        $div .= '></div>';

        ob_start();
        echo $div;
        ob_end_clean();
    }
}
