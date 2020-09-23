<?php

namespace Tests\Unit\Palette;

use Domain\Palette\DefaultPalette;
use Domain\Palette\FileLoader;
use Illuminate\Filesystem\Filesystem;
use PHPUnit\Framework\TestCase;

class DefaultPaletteTest extends TestCase
{
    /** @test */
    public function it_can_get_the_palette_as_an_array()
    {
        $this->assertIsArray(
            (new DefaultPalette(new FileLoader(new Filesystem, 'palette', __DIR__.'/fixtures')))->toArray()
        );
    }
}
