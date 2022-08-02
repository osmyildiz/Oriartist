<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookArtistPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_artist_pages')->insert([
            'title' => "Connect With Us",
            'first_paragraph' => "Are you working on an event or planning a party and want to book an artist? We can help you find the best live entertainment from around the globe.",
            'second_paragraph' => "",
            'meta_keywords'=>'Dancers, Specialist acts, Musicians, DJ, Drag queens, Singer',
            'meta_title'=>'Ori Artists is a bespoke entertainment company',
            'meta_description'=>'We align the most authentic creatives to events worldwide, managing the most exclusive and memorable entertainment for both artist and client. ',
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
    }
}
