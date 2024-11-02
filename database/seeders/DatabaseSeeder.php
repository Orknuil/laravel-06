<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\ReactionType;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Maged Yaseen',
            'email' => 'magedyaseengroups@gmail.com',
            'mobile' => '01024750245',
            'password' => Hash::make('password'),
            'roles' => 'admin',
        ]);
        ReactionType::factory()->create([
            'type' => 'ReactionType',
            'Like'=> false,
            'Heart'=> false,
            'Care'=> false,
            'Angry'=> false,
        ]);
    }
}
