<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected static ?string $password;

    public function run(): void
    {
    $user=User::create([
            'name' => 'Mohamed',
            'email' => 'mohamed123@gmail.com',
            'password' => static::$password ??= Hash::make('password'),
            
        ]);
        $user->assignRole('admin');
    }
}
