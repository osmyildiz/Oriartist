<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'uptitle' => "WORLD CLASS EVENTS ALIGNED",
            'downtitle' => "WITH WORLD CLASS TALENT",
            'url' => "assets1/images/video/video2.mp4",
            'priority'=>1,
            'is_active'=>1,
            'is_video'=>1
        ]);
        DB::table('sliders')->insert([
            'uptitle' => "TRUE ARTISTRY",
            'downtitle' => "AND UNIQUE ENTERTAINMENT",
            'url' => "assets1/images/manset.jpg",
            'priority'=>2,
            'is_active'=>1,
            'is_video'=>0
        ]);
        DB::table('sliders')->insert([
            'uptitle' => "EXPERT ADVICE AND KNOWLEDGE",
            'downtitle' => "FROM KEY INDUSTRY PROFESSIONALS",
            'url' => "assets1/images/video/video1.mp4",
            'priority'=>3,
            'is_active'=>1,
            'is_video'=>1
        ]);
        DB::table('sliders')->insert([
            'uptitle' => "HENTIC AND ORIGINAL TALENT",
            'downtitle' => "FROM AROUND THE WORLD",
            'url' => "assets1/images/manset.jpg",
            'priority'=>4,
            'is_active'=>1,
            'is_video'=>0
        ]);
        DB::table('sliders')->insert([
            'uptitle' => "BESPOKE",
            'downtitle' => "AND IMPRESSIVE TALENT",
            'url' => "assets1/images/manset.jpg",
            'priority'=>5,
            'is_active'=>1,
            'is_video'=>0
        ]);
    }
}
