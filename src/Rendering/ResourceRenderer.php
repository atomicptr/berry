<?php declare(strict_types=1);

namespace Berry\Rendering;

use InvalidArgumentException;
use RuntimeException;

class ResourceRenderer implements StringRenderer
{
    /**
     * @param resource $handle
     */
    public function __construct(
        private mixed $handle
    ) {
        if (!is_resource($this->handle)) {
            throw new InvalidArgumentException('Valid resource required');
        }
    }

    public function __destruct()
    {
        if (!is_resource($this->handle)) {
            return;
        }

        fclose($this->handle);
    }

    public static function temp(): ResourceRenderer
    {
        $handle = fopen('php://temp', 'wb+');

        if (!$handle) {
            throw new RuntimeException('Could not open php://temp');
        }

        return new ResourceRenderer($handle);
    }

    public function write(string $content): void
    {
        fwrite($this->handle, $content);
    }

    public function renderToString(): string
    {
        rewind($this->handle);
        return stream_get_contents($this->handle);
    }
}
