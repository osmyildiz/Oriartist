<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('package_items')->insert([
            'name' => "Creative development",
            'package_id'=>1,
            'priority'=>1,
        ]);
        DB::table('package_items')->insert([
            'name' => "Confidence building",
            'package_id'=>1,
            'priority'=>2,
        ]);
        DB::table('package_items')->insert([
            'name' => "Genuine and honest support",
            'package_id'=>1,
            'priority'=>3,
        ]);
        DB::table('package_items')->insert([
            'name' => "Being held accountable to your goals",
            'package_id'=>1,
            'priority'=>4,
        ]);
        DB::table('package_items')->insert([
            'name' => "Increased knowledge within the industry",
            'package_id'=>1,
            'priority'=>5,
        ]);
        DB::table('package_items')->insert([
            'name' => "Receiving constructive criticism and feedback",
            'package_id'=>1,
            'priority'=>6,
        ]);
        DB::table('package_items')->insert([
            'name' => "",
            'package_id'=>1,
            'priority'=>7,
        ]);
        DB::table('package_items')->insert([
            'name' => "",
            'package_id'=>1,
            'priority'=>8,
        ]);
        DB::table('package_items')->insert([
            'name' => "Photoshoot",
            'package_id'=>2,
            'priority'=>1,
        ]);
        DB::table('package_items')->insert([
            'name' => "Video shoot",
            'package_id'=>2,
            'priority'=>2,
        ]);
        DB::table('package_items')->insert([
            'name' => "Interview Filming",
            'package_id'=>2,
            'priority'=>3,
        ]);
        DB::table('package_items')->insert([
            'name' => "Creative advise",
            'package_id'=>2,
            'priority'=>4,
        ]);
        DB::table('package_items')->insert([
            'name' => "Logo",
            'package_id'=>2,
            'priority'=>5,
        ]);
        DB::table('package_items')->insert([
            'name' => "",
            'package_id'=>2,
            'priority'=>6,
        ]);
        DB::table('package_items')->insert([
            'name' => "",
            'package_id'=>2,
            'priority'=>7,
        ]);
        DB::table('package_items')->insert([
            'name' => "",
            'package_id'=>2,
            'priority'=>8,
        ]);
        DB::table('package_items')->insert([
            'name' => "Style and Wardrobe review",
            'package_id'=>3,
            'priority'=>1,
        ]);
        DB::table('package_items')->insert([
            'name' => "Wardrobe management, planning and outfitting",
            'package_id'=>3,
            'priority'=>2,
        ]);
        DB::table('package_items')->insert([
            'name' => "Style and Wardrobe review",
            'package_id'=>3,
            'priority'=>3,
        ]);
        DB::table('package_items')->insert([
            'name' => "Achieving your goals",
            'package_id'=>3,
            'priority'=>4,
        ]);
        DB::table('package_items')->insert([
            'name' => "Confidence building",
            'package_id'=>3,
            'priority'=>5,
        ]);
        DB::table('package_items')->insert([
            'name' => "Personal shopping and styling",
            'package_id'=>3,
            'priority'=>6,
        ]);
        DB::table('package_items')->insert([
            'name' => "",
            'package_id'=>3,
            'priority'=>7,
        ]);
        DB::table('package_items')->insert([
            'name' => "",
            'package_id'=>3,
            'priority'=>8,
        ]);
        DB::table('package_items')->insert([
            'name' => "Initial party planning meeting ",
            'package_id'=>4,
            'priority'=>1,
        ]);
        DB::table('package_items')->insert([
            'name' => "Booking coordination and contract for Artists ",
            'package_id'=>4,
            'priority'=>2,
        ]);
        DB::table('package_items')->insert([
            'name' => "Site walk through ",
            'package_id'=>4,
            'priority'=>3,
        ]);
        DB::table('package_items')->insert([
            'name' => "Bespoke setlists and music ",
            'package_id'=>4,
            'priority'=>4,
        ]);
        DB::table('package_items')->insert([
            'name' => "Supportive and trusted advice ",
            'package_id'=>4,
            'priority'=>5,
        ]);
        DB::table('package_items')->insert([
            'name' => "",
            'package_id'=>4,
            'priority'=>6,
        ]);
        DB::table('package_items')->insert([
            'name' => "",
            'package_id'=>4,
            'priority'=>7,
        ]);
        DB::table('package_items')->insert([
            'name' => "",
            'package_id'=>4,
            'priority'=>8,
        ]);
        DB::table('package_items')->insert([
            'name' => "VIP Parties",
            'package_id'=>5,
            'priority'=>1,
        ]);
        DB::table('package_items')->insert([
            'name' => "Product Launching",
            'package_id'=>5,
            'priority'=>2,
        ]);
        DB::table('package_items')->insert([
            'name' => "Conferences",
            'package_id'=>5,
            'priority'=>3,
        ]);
        DB::table('package_items')->insert([
            'name' => "Art Gallery Openings",
            'package_id'=>5,
            'priority'=>4,
        ]);
        DB::table('package_items')->insert([
            'name' => "Charity Galas",
            'package_id'=>5,
            'priority'=>5,
        ]);
        DB::table('package_items')->insert([
            'name' => "Hair Shows",
            'package_id'=>5,
            'priority'=>6,
        ]);
        DB::table('package_items')->insert([
            'name' => "Fashion Shows",
            'package_id'=>5,
            'priority'=>7,
        ]);
        DB::table('package_items')->insert([
            'name' => "Private Events",
            'package_id'=>5,
            'priority'=>8,
        ]);
        DB::table('package_items')->insert([
            'name' => "Initial music planning ",
            'package_id'=>6,
            'priority'=>1,
        ]);
        DB::table('package_items')->insert([
            'name' => "Music Jingles ",
            'package_id'=>6,
            'priority'=>2,
        ]);
        DB::table('package_items')->insert([
            'name' => "Produced and mastered tracks ",
            'package_id'=>6,
            'priority'=>3,
        ]);
        DB::table('package_items')->insert([
            'name' => "Personalised setlists ",
            'package_id'=>6,
            'priority'=>4,
        ]);
        DB::table('package_items')->insert([
            'name' => "Booking Artists ",
            'package_id'=>6,
            'priority'=>5,
        ]);
        DB::table('package_items')->insert([
            'name' => "",
            'package_id'=>6,
            'priority'=>6,
        ]);
        DB::table('package_items')->insert([
            'name' => "",
            'package_id'=>6,
            'priority'=>7,
        ]);
        DB::table('package_items')->insert([
            'name' => "",
            'package_id'=>6,
            'priority'=>8,
        ]);

    }
}
