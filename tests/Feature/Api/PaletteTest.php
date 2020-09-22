<?php

namespace Tests\Feature\Api;

use Illuminate\Http\Response;
use Tests\TestCase;

class PaletteTest extends TestCase
{
    /** @test */
    public function it_can_retrieve_the_palette_as_json()
    {
        $response = $this->get('/api/palette.json');

        $response->assertStatus(Response::HTTP_OK);
    }
}
