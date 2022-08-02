<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HelloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hellos')->insert([
            'title' => "HELLO",
            'first_paragraph' => "Ori Artists is owned and managed by Portia Emare whose ethos is to represent authenticity and excellence. Having firmly established herself on the world stage as a professional and creative in her own right, she recognised the advantage of not only knowing the artists but the clients and audience requirements and that’s what really sets Ori Artists apart.",
            'second_paragraph' => "Her mission is to invalue her knowledge of 25 years within the entertainment industry and encourage, nurture and support artists who want to create innovative and bespoke entertainment.",
            'sign_url' => "assets1/images/sign.png",
            'quote' => "Authenticity aligned with excellence leads to true success",
            'meta_keywords'=>'Dancers, Specialist acts, Musicians, DJ, Drag queens, Singer',
            'meta_title'=>'Ori Artists is a bespoke entertainment company',
            'meta_description'=>'We align the most authentic creatives to events worldwide, managing the most exclusive and memorable entertainment for both artist and client. ',


        ]);
    }
}
