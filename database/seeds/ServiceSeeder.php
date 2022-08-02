<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => "Artist management",
            'whom' => "Artist",
            'priority'=>1,
            'is_active'=>1,
        ]);
        DB::table('services')->insert([
            'name' => "Creative mentoring",
            'whom' => "Artist",
            'priority'=>2,
            'is_active'=>1,
        ]);
        DB::table('services')->insert([
            'name' => "Image consultation",
            'whom' => "Artist",
            'priority'=>3,
            'is_active'=>1,
        ]);
        DB::table('services')->insert([
            'name' => "Branding for artists",
            'whom' => "Artist",
            'priority'=>4,
            'is_active'=>1,
        ]);
        DB::table('services')->insert([
            'name' => "Photo shoots",
            'whom' => "Artist",
            'priority'=>5,
            'is_active'=>1,
        ]);
        DB::table('services')->insert([
            'name' => "Video promo",
            'whom' => "Artist",
            'priority'=>6,
            'is_active'=>1,
        ]);
        DB::table('services')->insert([
            'name' => "Creative coordination",
            'whom' => "Client",
            'priority'=>7,
            'is_active'=>1,
        ]);
        DB::table('services')->insert([
            'name' => "Artist booker",
            'whom' => "Client",
            'priority'=>8,
            'is_active'=>1,
        ]);
        DB::table('services')->insert([
            'name' => "Music consultation",
            'whom' => "Client",
            'priority'=>9,
            'is_active'=>1,
        ]);
        DB::table('services')->insert([
            'name' => "Bespoke entertainment packages",
            'whom' => "Client",
            'priority'=>10,
            'is_active'=>1,
        ]);
        DB::table('services')->insert([
            'name' => "Expert knowledge and advice",
            'whom' => "Client",
            'priority'=>11,
            'is_active'=>1,
        ]);

    }
}
