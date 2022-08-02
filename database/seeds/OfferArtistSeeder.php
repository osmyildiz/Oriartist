<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offer_artists')->insert([
            'title'          =>"What we do",
            'title2'          =>"We know what you need",
            'paragraph1'          =>"With an extensive and far-reaching network of key industry professionals we help build brands for artists. Connecting the most sought after musicians, songwriters, producers, vocalists, photographers, producers, choreographers, media experts, stylists and mentors.",
            'paragraph2'          =>"We can develop artists' performance and careers to allow them to grow into their most distinct and authentic creative self. Mentoring with the intention to encourage the very best in each individual artist.",
            'paragraph3'          =>"Get in touch to hear about our artist live session media packages. With our in house creatives we can help build your confidence, your brand and your success in becoming the artist you truly deserve to be.",
            'quote'          =>"Get in touch now to start building the career you’ve always imagined.",
            'item1'          =>"Are you a creative or performer and would like to be a part of Ori Artists?",
            'item2'          =>"Are you looking for management to help support your career?",
            'item3'          =>"Do you need help in refreshing your image and building your brand to create new opportunities?",
            'item4'          =>"",
            'meta_title'        =>"We can develop artists' performance and careers",
            'meta_keywords'          =>"Singer, Musicians, DJ",
            'meta_description'      =>"Get in touch to hear about our artist live session media packages.",
        ]);
    }
}
