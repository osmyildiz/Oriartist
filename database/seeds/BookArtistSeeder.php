<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_artists')->insert([
            'name'          =>"John jackson",
            'phone'          =>"+44 7299 299 599",
            'event_date'        =>"2022-07-15",
            'email'          =>"info@sores.co.uk",
            'city'        =>"London",
            'event_type'        =>"Party",
            'message'        =>"Please inform me about your services",
            'fields'        =>"Singer, Specialist Acts",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
    }
}
