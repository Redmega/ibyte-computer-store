<?php

namespace Tests\Feature\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;

use App\Models as Models;

class CreateUserTest extends TestCase
{
    use DatabaseTransactions;

    /**
    * A basic test example.
    *
    * @return void
    */
    public function testCreateUser()
    {
        $password = str_random(8);
        $user = factory(Models\User::class)->create([
          'password' => Hash::make($password)
        ]);

        $this->assertDatabaseHas('users', [
            'email' => $user->email,
        ]);

        return ['user' => $user, 'password' => $password];
    }

    /**
    * @depends testCreateUser
    */
    public function testUserHasCorrectlyHashedPassword($data)
    {
        $this->assertTrue(Hash::check($data['password'], $data['user']->password),
          'User password does not match stored hash.');
    }
}
