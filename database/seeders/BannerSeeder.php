<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
            'image' => 'ashik.png',
            'header' => 'Join to our community today',
            'sub_header' => 'We are waiting for you'
        ]);
    }
}
