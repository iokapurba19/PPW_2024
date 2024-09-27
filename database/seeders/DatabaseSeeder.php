<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Mohamed Said',
            'email' => 'mohamed@laravel.com',
            'password' => Hash::make('secret'),
        ]);
        
        User::factory()->create([
            'name' => 'James Brooks',
            'email' => 'james@laravel.com',
            'password' => Hash::make('passcode'),
        ]);


    }

}
