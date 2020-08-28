<?php

namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testUserCanViewRegister()
	{
	    $response = $this->get('/register');
	    $response->assertStatus(200);
	    $response->assertViewIs('auth.register')->assertSee('register');
	}

	public function testCanRegister()
	{
	   $response = $this->post('register', [
	        'name' => 'JMac1'.time(),
	        'email' => 'jmac'.time().'@example.com',
	        'password' => 'password',
	        'password_confirmation' => 'password',
	    ]);

	    $response->assertRedirect(route('home'));
	}



}
