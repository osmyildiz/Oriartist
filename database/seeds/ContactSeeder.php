<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([

            'phone'          =>"+44 7234 234 567",
            'address'        =>"London, England",
            'email'          =>"info@oriartists.co.uk",
            'instagram'      =>"https://instagram.com/oriartists",
            'youtube'       =>"https://www.youtube.com/oriartists",
            'facebook'       =>"https://www.facebook.com/oriartists",
            'twitter'        =>"https://twitter.com/oriartists",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
    }
}
