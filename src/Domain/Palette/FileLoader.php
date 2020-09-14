<?php

namespace Domain\Palette;

use Exception;
use Illuminate\Filesystem\Filesystem;
use RuntimeException;

class FileLoader
{
    private Filesystem $filesystem;

    private string $filename;

    private string $path;

    public function __construct(
        Filesystem $filesystem,
        string $path = __DIR__.'/../../../resources/json',
        string $filename = 'default-palette'
    ) {
        $this->filename = $filename;
        $this->filesystem = $filesystem;
        $this->setPath($path);
    }

    /*
    * @throws \RuntimeException
    */
    public function load(): array
    {
        $decoded = json_decode($this->loadJsonPath(), true);

        if (is_null($decoded) || json_last_error() !== JSON_ERROR_NONE) {
            throw new RuntimeException("Color palette file [{$this->filename}.json] contains an invalid JSON structure.");
        }

        return $decoded;
    }

    private function setPath(string $path): void
    {
        $this->path = rtrim($path, '/');
    }

    /*
    * @throws \Exception
    */
    private function loadJsonPath(): string
    {
        if (! $this->filesystem->exists($full = $this->getFullJsonPath())) {
            throw new Exception("The file [{$full}] does not exist.");
        }

        return $this->filesystem->get($full);
    }

    private function getFullJsonPath(): string
    {
        return "{$this->path}/{$this->filename}.json";
    }
}
