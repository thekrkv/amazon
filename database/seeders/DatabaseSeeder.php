<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         User::factory(1)->create([
             'email' => 'test@amazon.test',
             'customer' => 'internal',
         ]);
        User::factory(1)->create([
            'email' => 'user@amazon.test',
            'customer' => 'normal',
        ]);
        User::factory(1)->create([
            'email' => 'business@amazon.test',
            'customer' => 'business',
        ]);
    }
}
