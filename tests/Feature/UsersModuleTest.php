<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**
     * Prueba carga de la pagina con la lista de usuarios
     *
     * @test
     */
    function loadUsersListPage()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('Javier')
            ->assertSee('Francisco');
    }

    /**
     * Prueba mensaje no hay usuarios si vienen vacios de la BD
     *
     * @test
     */
    function messageNoUsers()
    {
        $this->get('/usuarios?empty')
            ->assertStatus(200)
            ->assertSee('No hay usuarios registrados');
    }

    /**
     * Prueba carga de la pagina con el detalle de un usuario
     *
     * @test
     */
    function loadUsersDetail()
    {
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('Mostrando detalle del usuario: 5');
    }


    /**
     * Prueba carga de la pagina  para la creacion de un usuario nuevo
     *
     * @test
     */
    function loadCreateUser()
    {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
    }
}
