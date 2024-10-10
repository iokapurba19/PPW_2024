<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        DB::table('users')->insert([
            'username' => 'seed',
            'email' => 'seed@gmail.com',
            'password' => Hash::make('admin12345'),
        ]);
   
        DB::table('users')->insert([
            'username' => 'adm',
            'email' => 'adm@gmail.com',
            'password' => Hash::make('admin'),
        ]);


        // User::factory()->create([
        //     'name' => 'Mohamed Said',
        //     'email' => 'mohamed@laravel.com',
        //     'password' => Hash::make('secret'),
        // ]);
        
        // User::factory()->create([
        //     'name' => 'James Brooks',
        //     'email' => 'james@laravel.com',
        //     'password' => Hash::make('passcode'),
        // ]);


    }

}
