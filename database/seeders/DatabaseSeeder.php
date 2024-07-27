<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Role::create([
            'title' => 'admin'
        ]);
        Role::create([
            'title' => 'user'
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role_id' => 1,
        ]);
        User::create([
            'name' => 'Asep Supriatna',
            'email' => 'asep93339@gmail.com',
            'role_id' => 1,
            'password' => 'admin123'
        ]);

        $this->call([
            CategoriesSeeder::class,
            ProductsSeeder::class
        ]);
        
    }
}
