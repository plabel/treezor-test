<?php

namespace Tests\Feature;

use App\Models\Utilisateur;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @internal
 * @coversNothing
 */
class UserServiceInsertTest extends TestCase
{
    use RefreshDatabase;

    public function testinsererUtilisateur()
    {
        $utilisateur = Utilisateur::factory()->make();
        $insertionOk = $utilisateur->save();

        $this->assertTrue($insertionOk);
    }
}
