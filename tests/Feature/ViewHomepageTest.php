<?php

namespace Tests\Feature;

use Illuminate\Http\Response;
use Tests\TestCase;

class ViewHomepageTest extends TestCase
{
    /** @test */
    public function view_homepage()
    {
        $this->get('/')
             ->assertStatus(Response::HTTP_OK)
             ->assertSee('Tailwind colors')
             ->assertSee('black')
             ->assertSee('white')
             ->assertSee('red');
    }
}
