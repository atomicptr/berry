<?php declare(strict_types=1);

namespace Berry\Tests\Benchmark;

use Berry\Element;
use Generator;

use function Berry\Html\table;
use function Berry\Html\td;
use function Berry\Html\tr;

/**
 * @BeforeMethods({"setUp"})
 * @ParamProviders({"provideTableSizes"})
 * @Revs(10)
 */
class BigTableBench
{
    private Element $table;

    /**
     * @return Generator<string, array{rows: int, cols: int}> $params
     */
    public function provideTableSizes(): Generator
    {
        yield 'small' => ['rows' => 10, 'cols' => 10];
        yield 'medium' => ['rows' => 100, 'cols' => 100];
        yield 'large' => ['rows' => 1000, 'cols' => 1000];
    }

    /**
     * @param array{rows: int, cols: int} $params
     */
    public function setUp(array $params): void
    {
        $this->table = $this->buildTable($params['rows'], $params['cols']);
    }

    private function buildTable(int $rows, int $cols): Element
    {
        $table = table();

        for ($row = 0; $row < $rows; $row++) {
            $tr = tr();

            for ($col = 0; $col < $cols; $col++) {
                $tr->child(td()->text("$row x $col"));
            }

            $table->child($tr);
        }

        return $table;
    }

    /**
     * @param array{rows: int, cols: int} $params
     */
    public function benchBuildingTable(array $params): void
    {
        $this->buildTable($params['rows'], $params['cols']);
    }

    /**
     * @param array{rows: int, cols: int} $params
     */
    public function benchRendering(array $params): void
    {
        $this->table->toString();
    }

    /**
     * @param array{rows: int, cols: int} $params
     */
    public function benchBuildingTableAndRendering(array $params): void
    {
        $table = $this->buildTable($params['rows'], $params['cols']);
        $table->toString();
    }
}
