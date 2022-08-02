<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fields')->insert([
            'artist_id' => 17,
            'category_id' => 1,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('fields')->insert([
            'artist_id' => 18,
            'category_id' => 4,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('fields')->insert([
            'artist_id' => 18,
            'category_id' => 5,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('fields')->insert([
            'artist_id' => 4,
            'category_id' => 5,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('fields')->insert([
            'artist_id' => 4,
            'category_id' => 6,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('fields')->insert([
            'artist_id' => 5,
            'category_id' => 6,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
    }
}
