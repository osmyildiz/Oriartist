<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offer_clients')->insert([
            'title'          =>"What we do",
            'title2'          =>"We know what you need",
            'paragraph1'          =>"Ori Artists celebrate originality. We work with music artists, musicians, singers, west end performers, international cabaret artists, circus performers, dancers and presenters from around the globe. We understand that if respect, authenticity and professionalism are always at the core of our work then we can create the most memorable event. We connect the dots from artists to client and client to artist. Finding the perfect alignment for your event to celebrate the creative in all its glory.",
            'paragraph2'          =>"We believe it's all about collaboration and tuning into our clients needs. Sourcing the best of the worlds talents making sure everyone involved is fulfilled and respected across the board.",
            'paragraph3'          =>"Whether you’re working on a large scale event or private party Ori Artists offers the most unique and impressive talent along with creative coordination.",
            'quote'          =>"For booking and general enquiries get in touch now or leave us a message and we will get back to you.",
            'item1'          =>"Are you looking for entertainment to suit your event or have an idea or concept for an event and need a creative coordinator?",
            'item2'          =>"",
            'item3'          =>"",
            'item4'          =>"",
            'meta_title'        =>"Ori Artists celebrate originality.",
            'meta_keywords'          =>"Singers, Musicians, DJ",
            'meta_description'      =>"We work with music artists, musicians, singers, west end performers, international cabaret artists, circus performers, dancers and presenters from around the globe. ",
        ]);
    }
}
