<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;

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
