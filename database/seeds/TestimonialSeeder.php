<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'name' => "Harriette Mullen",
            'title' => "Singer",
            'comment' => "Since our professional working relationship began, I have experienced nothing but complete and utter support and encouragement from Portia. Portia is incredibly nurturing as a mentor and very generous with her time, advice - and also contacts too! Since working with Ori Artists I have worked on some of the most exciting and momentous gigs of my career so far – I’ve performed at venues that I never would have imagined performing at! I myself am in awe of Portia and I admire her work ethic and incredible talent and so it’s a dream position for me to be working with her on my own career.",
            'img' => "assets1/images/comment_1.jpg",
            'priority'=>1,
            'is_active'=>1,
        ]);
        DB::table('testimonials')->insert([
            'name' => "Sian Parry Jones",
            'title' => "Archer Street",
            'comment' => "I have worked with Portia over the last 10 years in Archer Street Cocktail Bar where I am one of the owners. She was instrumental in helping us build the Archer Street team of performers and was immensely popular with our clientele. I and other colleagues have booked her at independent events around the UK and internationally varying from birthdays, weddings and charity functions, she has always been very professional, helpful and has been the key to the most successful parties.",
            'img' => "assets1/images/comment_2.jpg",
            'priority'=>2,
            'is_active'=>1,
        ]);
        DB::table('testimonials')->insert([
            'name' => "Tracy Dennis",
            'title' => "Creative Director of The IT Girls",
            'comment' => "I’m bursting at the seams when it comes to praising this talented, professional young lady. She is an absolute pleasure to work with. Not only a super talented vocalist & host but I love how Portia listens and understands a brief and also contributes to make that brief better. She then brings my ideas of a show to life with her superb vocals and hosting skills. I can guarantee my client will be 100% happy when Portia is working at their event.",
            'img' => "assets1/images/comment_3.jpg",
            'priority'=>3,
            'is_active'=>1,
        ]);
        DB::table('testimonials')->insert([
            'name' => "Roderick - Williams Young",
            'title' => "Producer",
            'comment' => "I’ve known Portia for well over 10 years now and have been fortunate to work with her on a number of occasions over those years. Portia is one of those few people whose undoubted talent as an artist is combined with such professionalism and a respect for those she works with. She brings both creativity and a real passion to all projects and that is a powerful combination. I also truly believe these qualities are increasingly rare which is why I look forward to the opportunity of working with her again.",
            'img' => "assets1/images/comment_1.jpg",
            'priority'=>4,
            'is_active'=>1,
        ]);
        DB::table('testimonials')->insert([
            'name' => "Zoe Tyler<",
            'title' => "Entertainment Manager",
            'comment' => "Portia was one of the first singers I booked 10 years ago. I was a huge fan of her vocal talents, and was super excited that I could show the world of entertainment what a stunning solo artist she was. 10  years later and I still class Portia as one of the best. Her persona is one of class and poise and a lovely person to know and class as a friend. So proud to be associated with this wonderful woman.",
            'img' => "assets1/images/comment_1.jpg",
            'priority'=>5,
            'is_active'=>1,
        ]);

    }
}
