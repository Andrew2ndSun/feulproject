<?php
namespace Tests\Unit;
use App\Fuelquote;
use Tests\TestCase;
use App\User;
use Auth;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class FuelquoteTest extends TestCase
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
        //Route::get('/', 'FuelController@listfuel');
        //listfuel có link lìa /
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertViewIs('backend.fuel.listfuel')->assertSee('List Fuel');
        //assertViewIs gọi view backend.fuel.listfuel
        //assertSee xác nhận có chữ List Fuel trong view
        //$response->assertStatus(200);
    }
    
    //test file dang nhap moi xem duoc danh sach fule
    public function test_have_to_login_to_view_fuel_quote()
    {
        $user = factory(User::class)->make();
        //tao user de truy cap vao danh sach fuelquote
        //
        $response = $this->actingAs($user)->get('/fuelquote');
        //truy cap voi user vua tao vao ds fuel quote
        $response->assertStatus(200);//kiem tra cotruy cap thanh cong khong
    }
    //test khog dang nhap thi ko xem duoc ds fuel quote
    public function test_not_login_no_access_fuel_quote()
    {
        //$user = factory(User::class)->make();
        //tao user de truy cap vao danh sach fuelquote
        //
        $response = $this->get('/fuelquote');
        //chua dang nhap thi nó trả về trang login
        $response->assertRedirect('/login');
    }
    public function test_after_login_create_fuel_quote(){
         
        $user = factory(User::class)->make();
        //duong dan luu fuelquote là fuelquote, phuong thuc post
        $response = $this->actingAs($user)->post('fuelquote', [
            'fuel_id' => 4,
            'gallonrequest'=>1,
            'suggestprice' => 1,
            'totalAmountDue'=>1,
            'deliverydate' => date("Y-m-d H:i:s"),
        ]);
        //tao xong thi chya den trang ds fuelquote
        $response->assertRedirect('/fuelquote');
    }

  }