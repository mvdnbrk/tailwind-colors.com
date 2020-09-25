<?php

declare(strict_types=1);

namespace Domain\Palette;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Arr;

final class DefaultPalette implements Arrayable
{
    private array $data;

    public function __construct(FileLoader $loader)
    {
        $this->data = $loader->load();
    }

    public function colors(): array
    {
        return array_keys(
            Arr::except($this->data, ['black', 'white'])
        );
    }

    public function shadesOf(string $color): array
    {
        $value = Arr::get($this->data, $color);

        return is_array($value) ? $value : [];
    }

    public function toArray(): array
    {
        return $this->data;
    }
}
