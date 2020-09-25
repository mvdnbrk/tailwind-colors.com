<?php

declare(strict_types=1);

namespace Domain\Palette;

use Illuminate\Contracts\Support\Arrayable;

final class DefaultPalette implements Arrayable
{
    private array $data;

    public function __construct(FileLoader $loader)
    {
        $this->data = $loader->load();
    }

    public function colors(): array
    {
        return array_keys($this->data);
    }

    public function shadesOf(string $color): array
    {
        if (
            array_key_exists($color, $this->data) &&
            is_array($this->data[$color])
        ) {
            return $this->data[$color];
        }

        return [];
    }

    public function toArray(): array
    {
        return $this->data;
    }
}
