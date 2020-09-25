<?php

namespace Tests\Unit\Palette;

use Domain\Palette\DefaultPalette;
use Domain\Palette\FileLoader;
use Illuminate\Filesystem\Filesystem;
use PHPUnit\Framework\TestCase;

class DefaultPaletteTest extends TestCase
{
    private DefaultPalette $palette;

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
        $this->assertSame(['blue'], $this->palette->colors());
    }

    /** @test */
    public function it_can_retrieve_the_shades_of_a_color()
    {
        $this->assertSame([
            '100' => '#ebf8ff',
            '200' => '#bee3f8',
        ], $this->palette->shadesOf('blue'));
    }

    /** @test */
    public function it_returns_an_empty_array_for_black_and_white_shades()
    {
        $this->assertSame([], $this->palette->shadesOf('black'));
        $this->assertSame([], $this->palette->shadesOf('white'));
    }

    /** @test */
    public function it_returns_an_empty_array_for_shades_of_a_color_that_does_not_exist()
    {
        $this->assertSame([], $this->palette->shadesOf('does-not-exits'));
    }
}
