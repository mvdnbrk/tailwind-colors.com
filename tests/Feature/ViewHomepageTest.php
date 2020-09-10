<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewHomepageTest extends TestCase
{
    /** @test */
    public function view_homepage()
    {
        $response = $this->get('/')
            ->assertStatus(200)
            ->assertSee('Tailwind colors');
    }
}
