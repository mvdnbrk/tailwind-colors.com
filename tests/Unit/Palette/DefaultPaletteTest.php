<?php

namespace Tests\Unit\Palette;

use Domain\Palette\DefaultPalette;
use Domain\Palette\FileLoader;
use Illuminate\Filesystem\Filesystem;
use PHPUnit\Framework\TestCase;

class DefaultPaletteTest extends TestCase
{
    protected function setUp(): void
    {
        $this->palette = new DefaultPalette(new FileLoader(new Filesystem, 'palette', __DIR__.'/fixtures'));
    }

    /** @test */
    public function it_can_retrieve_the_palette_as_an_array()
    {
        $this->assertIsArray($this->palette->toArray());
    }

    /** @test */
    public function it_can_retrieve_the_colors()
    {
        $this->assertIsArray($this->palette->colors());
        $this->assertSame(['black', 'white', 'blue'], $this->palette->colors());
    }
}
