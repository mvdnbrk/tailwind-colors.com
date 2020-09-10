<?php

namespace Domain\Palette;

class DefaultPalette
{
    private array $data;

    public function __construct(FileLoader $loader)
    {
        $this->data = $loader->load();
    }

    public function getData(): array
    {
        return $this->data;
    }
}
