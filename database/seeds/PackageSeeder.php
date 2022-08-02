<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            'name' => "CREATIVE MENTORING",
            'top_text' => "ONE TO ONE SESSIONS WITH PORTIA EMARE. A PLACE TO FIND YOUR TRUE VOICE AND BUILD ON YOUR CONFIDENCE AND YOUR BRAND TO HELP MOVE FORWARDS IN YOUR CAREER.",
            'bottom_text' => "A safe space to talk about your career openly and freely with someone who for the past 25 years has had an abundance of experience in all aspects of the industry.",
            'is_client'=>0,
            'priority'=>1,
            'is_active'=>1,
        ]);
        DB::table('packages')->insert([
            'name' => "ARTIST SHOWREELS",
            'top_text' => "ORI ARTISTS SUPPORT AND GUIDE YOU TO CREATE THE BEST POSSIBLE CONTENT FOR YOUR BRAND.",
            'bottom_text' => "Need some updated media to showcase your talent in the best possible way? Our team will source location, direct full video shoots, capture live performances, deliver photoshoots, vocal reels and recordings. All tailored to suit not only the artist you are today but the artist you dream of becoming.",
            'is_client'=>0,
            'priority'=>2,
            'is_active'=>1,
        ]);
        DB::table('packages')->insert([
            'name' => "IMAGE CONSULTATION",
            'top_text' => "BOOK A CONSULTATION WITH US TO DISCUSS HOW WE FIND YOUR UNIQUE STYLE TO MAKE YOU FEEL EMPOWERED ON STAGE AND OFF.",
            'bottom_text' => "Having a strong image is an integral part of our industry and we know how daunting it can be when you also have to take care of your mental, physical and creative self. We work on styling for music videos and photo shoots and can source that one off luxurious piece for the most important event of your career.",
            'is_client'=>0,
            'priority'=>3,
            'is_active'=>1,
        ]);
        DB::table('packages')->insert([
            'name' => "EVENT ENTERTAINMENT",
            'top_text' => "We provide assistance through every step of the entertainment booking process",
            'bottom_text' => "",
            'is_client'=>1,
            'priority'=>1,
            'is_active'=>1,
        ]);
        DB::table('packages')->insert([
            'name' => "CREATIVE COORDINATION",
            'top_text' => "We offer creative support and planning for events such as ",
            'bottom_text' => "",
            'is_client'=>1,
            'priority'=>2,
            'is_active'=>1,
        ]);
        DB::table('packages')->insert([
            'name' => "MUSIC CONSULTATION ",
            'top_text' => "We will work with you to ensure that you book the most suitable music genre and artist for your  event or occasion. ",
            'bottom_text' => "",
            'is_client'=>1,
            'priority'=>3,
            'is_active'=>1,
        ]);
    }
}
