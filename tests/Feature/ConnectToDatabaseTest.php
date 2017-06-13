<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\DB;


class ConnectToDatabase extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDatabaseConnection()
    {
        try {
            $this->assertDatabaseHas('sessions', []);
        } catch (Exception $e) {
            throw $e;
        }
        return true;
    }
}
