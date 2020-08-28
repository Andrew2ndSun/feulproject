<?php

namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
     public function testloginurl()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);//
    }

     public function testUserCanViewLogin()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);

        $response->assertViewIs('auth.login')->assertSee('Login');
    }

    public function test_user_cannot_view_a_login_form_when_authenticated()
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)->get('/login');

        $response->assertRedirect('/home');
    } 

    public function test_user_can_login_with_correct_credentials()// KIEM TRA OCD login co dung ko
    {
        $user = factory(User::class)->create([
            'password' => bcrypt($password = 'i-love-laravel'), //create a fake user
        ]);

        $response = $this->post('/login', [ //send the fake user to database
            'email' => $user->email,
            'password' => $password,
        ]);

        $response->assertRedirect('/home');// co phai nhay den tran home hay ko 

        $this->assertAuthenticatedAs($user);
    }
    
     public function test_user_cannot_login_with_incorrect_password()
    {
        $user = factory(User::class)->create([
            'password' => bcrypt('i-love-laravel'),
        ]);
        
        $response = $this->from('/login')->post('/login', [
            'email' => $user->email,
            'password' => 'invalid-password',
        ]);
        
        $response->assertRedirect('/login');
        $response->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }

}
