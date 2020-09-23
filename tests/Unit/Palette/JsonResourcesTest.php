<?php

namespace Tests\Unit\Palette;

use Domain\Palette\FileLoader;
use Illuminate\Filesystem\Filesystem;
use PHPUnit\Framework\TestCase;

class JsonResourcesTest extends TestCase
{
    public function jsonProvider()
    {
        return [
            ['palette-v0x'],
            ['palette-v1x'],
            ['palette-v2x'],
        ];
    }

    /**
     * @test
     * @dataProvider jsonProvider
     */
    public function ensure_the_json_files_are_valid(string $filename)
    {
        $this->assertIsArray(
            (new FileLoader(new Filesystem, $filename, __DIR__.'/../../../resources/json'))->load()
        );
    }
}
