<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @internal
 * @coversNothing
 */
class UtilisateurControllerStoreTest extends TestCase
{
    use RefreshDatabase;

    public function testStoreUtilisateur()
    {
        $fake_data = [
            'nom' => 'Sally',
            'prenom' => 'Sally jr',
            'email' => 'sally.jr@google.com',
            'date_naissance' => '1-1-1999',
            'actif' => true,
        ];
        $response = $this->post('/utilisateurs', $fake_data);

        $response->assertStatus(201);
    }
}
