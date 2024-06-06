<?php

namespace Database\Seeders;

use App\Models\Tache;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TacheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstOrCreate(['email' => 'gab@gab.com'], [
            'name' => 'Gabriel T. St-Hilaire',
            'password' => Hash::make('password'),
            'email_verified_at' => now()
        ]);

        Tache::factory()
            ->count(10)
            ->for($user)
            ->create();

        $user2 = User::firstOrCreate(['email' => 'autre@autre.com'], [
            'name' => 'Gabriel T. St-Hilaire',
            'password' => Hash::make('password'),
            'email_verified_at' => now()
        ]);

        Tache::factory()
            ->count(10)
            ->for($user2)
            ->create();
    }
}
