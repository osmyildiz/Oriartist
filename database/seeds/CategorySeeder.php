<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'          =>"SINGER",
            'alias'          =>".singer",
            'is_active'        =>1,
            'priority'        =>1,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('categories')->insert([
            'name'          =>"DJ",
            'alias'          =>".dj",
            'is_active'        =>1,
            'priority'        =>1,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('categories')->insert([
            'name'          =>"DRAG QUEENS",
            'alias'          =>".dragqueens",
            'is_active'        =>1,
            'priority'        =>1,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('categories')->insert([
            'name'          =>"DANCERS",
            'alias'          =>".dancers",
            'is_active'        =>1,
            'priority'        =>1,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('categories')->insert([
            'name'          =>"SPECIALIST ACTS",
            'alias'          =>".specialist",
            'is_active'        =>1,
            'priority'        =>1,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('categories')->insert([
            'name'          =>"MUSICIANS",
            'alias'          =>".musicians",
            'is_active'        =>1,
            'priority'        =>1,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);

    }
}
