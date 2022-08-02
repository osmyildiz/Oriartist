<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('joins')->insert([
            'name'          =>"Maria Sandova",
            'phone'          =>"+44 7222 233 566",
            'website'        =>"mariasandova.com",
            'email'          =>"info@mariasandova.co.uk",
            'instagram'      =>"https://instagram.com/mariasan",
            'youtube'       =>"https://www.youtube.com/mariasan",
            'facebook'       =>"https://www.facebook.com/mariasan",
            'city'        =>"London",
            'message'        =>"Please inform me about your services",
            'fields'        =>"Singer, Specialist Acts",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
    }
}
