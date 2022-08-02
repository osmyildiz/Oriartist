<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoinPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('join_pages')->insert([
            'title' => "Connect With Us",
            'first_paragraph' => "Artists - If you want to talk about your career and looking for some creative mentoring, work with Portia and her team to build your brand and make new connections within the industry. We would love to be apart of your success story.",
            'second_paragraph' => "",
            'meta_keywords'=>'Dancers, Specialist acts, Musicians, DJ, Drag queens, Singer',
            'meta_title'=>'Ori Artists is a bespoke entertainment company',
            'meta_description'=>'We align the most authentic creatives to events worldwide, managing the most exclusive and memorable entertainment for both artist and client. ',
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
    }
}
