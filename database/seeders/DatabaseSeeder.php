<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::factory()->create([
            'name' => 'user', 
            'slug' => 'user',
        ]);
        
        \App\Models\User::factory(10)->create([
            'role_id' => $role->id,
        ]);
    }
}
