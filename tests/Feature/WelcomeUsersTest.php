<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function welcomeUsersWithNickname()
    {
        $response = $this->get('/saludo/gerardo/fofo')
            ->assertStatus(200)
            ->assertSee('Bienvenido gerardo, tu apodo es fofo');
    }

    /**
     * A basic feature test example.
     *
     * @test
     */
    public function welcomeUsersWithoutNickname()
    {
        $response = $this->get('/saludo/gerardo')
            ->assertStatus(200)
            ->assertSee('Bienvenido gerardo, no tienes apodo');
    }
}
