<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'title' => "Who we are",
            'first_paragraph' => "Ori Artists is a bespoke entertainment company. We align the most authentic creatives to events worldwide, managing the most exclusive and memorable entertainment for both artist and client. Ori Artists prides itself on a geniune, creative and professional approach adapting to each individual and artist.We offer a safe space for creatives to come together and support your career. Allowing each person to feel that they can speak openly and honestly about their creative vision. We believe in celebrating your authenticity and creating opportunities to best suit your individuality.",
            'second_paragraph' => "",
            'img'=>"assets1/images/whoweare1.jpg",
            'meta_keywords'=>'Dancers, Specialist acts, Musicians, DJ, Drag queens, Singer',
            'meta_title'=>'Ori Artists is a bespoke entertainment company',
            'meta_description'=>'We align the most authentic creatives to events worldwide, managing the most exclusive and memorable entertainment for both artist and client. ',
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),


        ]);
    }
}
