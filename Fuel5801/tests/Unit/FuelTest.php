<?php

namespace Tests\Unit;

use App\Fuel;
use Tests\TestCase;
use App\User;
use Auth;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FuelTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
     public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testUrl()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertViewIs('backend.fuel.listfuel')->assertSee('List Fuel');
    }

}