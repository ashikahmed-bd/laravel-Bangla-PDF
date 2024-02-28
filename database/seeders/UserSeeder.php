<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'মোঃ ফরিদ আহম্মেদ',
                'title' => 'Councilor',
                'signature' => '1.jpg',
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'serial' => 25652,
                'created_at' => now(),
            ],
            [
                'name' => '(উমা চৌধুরী)',
                'title' => 'Mayor',
                'signature' => '2.jpg',
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'serial' => 25653,
                'created_at' => now(),
            ]
        ]);
    }
}
