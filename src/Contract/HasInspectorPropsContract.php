<?php declare(strict_types=1);

namespace Berry\Contract;

interface HasInspectorPropsContract
{
    /**
     * @return array<string, string|int|float|bool|null>
     */
    public function inspectorProps(): array;
}
