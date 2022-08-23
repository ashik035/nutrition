<?php

use Illuminate\Database\Seeder;
use App\Models\User;
namespace Database\Seeders;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'ashik',
            'email' => 'admin@mailinator.com',
            'password' => bcrypt('gym@1234'),
        ]);
    }
}

// to run it:  php artisan db:seed --class=AdminUserSeeder