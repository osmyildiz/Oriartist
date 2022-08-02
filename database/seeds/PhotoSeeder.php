<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            'artist_id'          =>4,
            'img'          =>'/assets1/images/artists/1654853098990jasmine_takacs_1.jpg',
            'is_active'        =>1,
            'priority'        =>1,
            'cover'        =>0,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('photos')->insert([
            'artist_id'          =>4,
            'img'          =>'/assets1/images/artists/1654853098994jasmine_takacs_2.jpg',
            'is_active'        =>1,
            'priority'        =>2,
            'cover'        =>0,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('photos')->insert([
            'artist_id'          =>4,
            'img'          =>'/assets1/images/artists/1654853098996jasmine_takacs_3.jpg',
            'is_active'        =>1,
            'priority'        =>3,
            'cover'        =>0,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);

        DB::table('photos')->insert([
            'artist_id'          =>5,
            'img'          =>'/assets1/images/artists/1654860201779chez_taylor_2.jpg',
            'is_active'        =>1,
            'priority'        =>1,
            'cover'        =>0,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('photos')->insert([
            'artist_id'          =>5,
            'img'          =>'/assets1/images/artists/1654860201775chez_taylor_1.jpg',
            'is_active'        =>1,
            'priority'        =>2,
            'cover'        =>0,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('photos')->insert([
            'artist_id'          =>5,
            'img'          =>'/assets1/images/artists/1654860201782chez_taylor_3.jpg',
            'is_active'        =>1,
            'priority'        =>3,
            'cover'        =>0,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);

        DB::table('photos')->insert([
            'artist_id'          =>15,
            'img'          =>'/assets1/images/artists/1654886501017conleth_2.jpg',
            'is_active'        =>1,
            'priority'        =>1,
            'cover'        =>0,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('photos')->insert([
            'artist_id'          =>15,
            'img'          =>'/assets1/images/artists/1654886501023conleth_3.jpg',
            'is_active'        =>1,
            'priority'        =>2,
            'cover'        =>0,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('photos')->insert([
            'artist_id'          =>15,
            'img'          =>'/assets1/images/artists/1654886501024conleth_4.jpg',
            'is_active'        =>1,
            'priority'        =>3,
            'cover'        =>0,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('photos')->insert([
            'artist_id'          =>5,
            'img'          =>'/assets1/images/artists/1654886501026conleth_5.jpg',
            'is_active'        =>1,
            'priority'        =>4,
            'cover'        =>0,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);

        DB::table('photos')->insert([
            'artist_id'          =>15,
            'img'          =>'/assets1/images/artists/1654886501017conleth_2.jpg',
            'is_active'        =>1,
            'priority'        =>1,
            'cover'        =>0,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('photos')->insert([
            'artist_id'          =>15,
            'img'          =>'/assets1/images/artists/1654886501023conleth_3.jpg',
            'is_active'        =>1,
            'priority'        =>2,
            'cover'        =>0,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('photos')->insert([
            'artist_id'          =>15,
            'img'          =>'/assets1/images/artists/1654886501024conleth_4.jpg',
            'is_active'        =>1,
            'priority'        =>3,
            'cover'        =>0,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('photos')->insert([
            'artist_id'          =>17,
            'img'          =>'/assets1/images/artists/1654886928370lowri_beth_1.jpg',
            'is_active'        =>1,
            'priority'        =>4,
            'cover'        =>0,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('photos')->insert([
            'artist_id'          =>17,
            'img'          =>'/assets1/images/artists/1654886928372lowri_beth_3.jpg',
            'is_active'        =>1,
            'priority'        =>4,
            'cover'        =>0,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('photos')->insert([
            'artist_id'          =>17,
            'img'          =>'/assets1/images/artists/1654886928371lowri_beth_2.jpg',
            'is_active'        =>1,
            'priority'        =>4,
            'cover'        =>0,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('photos')->insert([
            'artist_id'          =>17,
            'img'          =>'/assets1/images/artists/1654886928373lowri_beth_4.jpg',
            'is_active'        =>1,
            'priority'        =>4,
            'cover'        =>0,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('photos')->insert([
            'artist_id'          =>17,
            'img'          =>'/assets1/images/artists/1654886928376lowri_beth_6.jpg',
            'is_active'        =>1,
            'priority'        =>5,
            'cover'        =>0,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);
        DB::table('photos')->insert([
            'artist_id'          =>17,
            'img'          =>'/assets1/images/artists/1654886928375lowri_beth_5.jpg',
            'is_active'        =>1,
            'priority'        =>6,
            'cover'        =>0,
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),

        ]);

    }
}
