<?php

namespace Domain\Palette;

use Illuminate\Contracts\Support\Arrayable;

class DefaultPalette implements Arrayable
{
    private array $data;

    public function __construct(FileLoader $loader)
    {
        $this->data = $loader->load();
    }

    public function toArray(): array
    {
        return $this->data;
    }
}
