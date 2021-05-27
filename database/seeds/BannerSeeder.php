<?php

use App\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sliders = [
            ['image' => 'sliders/01.jpg'],
            ['image' => 'sliders/02.jpg'],
            ['image' => 'sliders/03.jpg'],
        ];
        $banners = [
            ['image' => 'sliders/banners/01.jpg', 'type' => 1],
            ['image' => 'sliders/banners/02.png', 'type' => 1],
        ];

        Banner::insert($sliders);
        Banner::insert($banners);
        
    }
}
