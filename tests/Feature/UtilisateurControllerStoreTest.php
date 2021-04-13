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
            'prenom' => 'Sally',
            'email' => 'sally.jr@google.com',
            'date_naissance' => '1999-01-01',
            'actif' => '0',
        ];

        $response = $this->withHeaders(['X-CSRF-TOKEN' => csrf_token()])
            ->post('/utilisateurs', $fake_data)
        ;
        $redirect_url = $response->getTargetUrl();
        $regex_utilisateur_show_uri = '/\\/utilisateurs\\/\\d+$/';

        $this->assertMatchesRegularExpression($regex_utilisateur_show_uri, $redirect_url);
    }
}
