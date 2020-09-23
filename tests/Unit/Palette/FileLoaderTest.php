<?php

namespace Tests\Unit\Palette;

use Domain\Palette\FileLoader;
use Exception;
use Illuminate\Filesystem\Filesystem;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class FileLoaderTest extends TestCase
{
    /** @test */
    public function it_can_load_the_file()
    {
        $this->assertIsArray(
            (new FileLoader(new Filesystem, 'palette', __DIR__.'/fixtures'))->load()
        );
    }

    /** @test */
    public function it_can_load_the_file_with_or_without_a_file_extension()
    {
        $filename = 'palette';
        $this->assertIsArray(
            (new FileLoader(new Filesystem, $filename, __DIR__.'/fixtures'))->load()
        );

        $filename = 'palette.json';
        $this->assertIsArray(
            (new FileLoader(new Filesystem, $filename, __DIR__.'/fixtures'))->load()
        );
    }

    /** @test */
    public function it_throws_an_exception_if_the_path_does_not_exist()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('The file [not-existent.json] does not exist.');

        (new FileLoader(new Filesystem, 'not-existent'))->load();
    }

    /** @test */
    public function it_throws_an_exception_when_the_json_is_invalid()
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Color palette file [invalid.json] contains an invalid JSON structure.');

        (new FileLoader(new Filesystem, 'invalid', __DIR__.'/fixtures'))->load();
    }
}
