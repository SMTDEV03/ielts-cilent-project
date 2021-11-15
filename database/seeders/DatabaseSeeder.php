<?php

namespace Database\Seeders;

use App\Models\meta_sample;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\role;
use App\Models\Sample;

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
        
        User::factory(10)->create([
            'role_id' => $role->id,
        ]);

        sample::create([
            'type' => 'essays',
        ]);

        meta_sample::factory(30)->create();
        
    }
}
