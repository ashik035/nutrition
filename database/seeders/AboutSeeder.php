<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $total = About::count();
        $ab = [];
        $ab['about_me'] = 'Professional & personal fitness trainer,to assist clients in all fitness levels to get into shape & achieve goal.
        I offer clients with customized meal plan,workout program,supplement guideline
        & progress monitoring for achieving the perfect desired shape!';
        if ($total == 0) {
            About::create($ab);
        } else {
            DB::table('abouts')->where('id', 1)->update($ab);
        }
    }
}
