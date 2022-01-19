<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RouteTest extends TestCase
{
    use RefreshDatabase;

    public function testAccessAdminWithGuestRole()
    {
        $response = $this->get('/admin/articles');
        $response->assertRedirect('/login');
    }

    public function testAccessAdminWithAdminRole()
    {
        //permet de se connecter en tant qu'admin
        $admin = User::create([
            'email' => 'admin@admin.com',
            'name' => 'Admin',
            'password' => Hash::make('password'),
            'role' => User::ADMIN_ROLE
        ]);
        $this->actingAs($admin);
        $response = $this->get('/admin/articles');
        $response->assertStatus(200);
    }
}
