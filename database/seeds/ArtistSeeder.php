<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([

            'name'          =>"Aaron & Jasmine",
            'surname'          =>"",
            'slug'          =>"aaron_brown_jasmine_takacs",
            'phone'          =>"+44 7234 234 567",
            'city'        =>"London",
            'email'          =>"info@oriartists.co.uk",
            'instagram'      =>"https://instagram.com/faithbayless",
            'website'      =>"https://faithbayless.com",
            'youtube'       =>"https://www.youtube.com/faithbayless",
            'facebook'       =>"https://www.facebook.com/faithbayless",
            'twitter'        =>"https://twitter.com/faithbayless",
            'paragraph1'        =>"Jasmine Takacs & Aaron Brown met in London and have danced together since 2015. They have since then developed a unique repertoire of latin/ballroom dancing mixed with show/exhibition style lifts and tricks. The pair has performed all over the world at private events, award ceremonies, weddings, cabaret clubs, UK TOUR of ‘Keep Dancing’ and they were the latin and ballroom body doubles for the main actors in the new movie ‘Time To Dance”. Jasmine made her debut in 2017 as a pro dancer on the hit TV Show “LET’S DANCE” The Swedish spin-off of the UK’s famous Strictly Come Dancing partnering famous actor Johannes Brost and in 2018 with actor Gustaf Hammarsten. Aaron learned basic Swedish and made his debut on the show in 2018 where he was partnered up with Swedish born legendary actress Britt Ekland. The pair will be back in spring 2019 for another series of the show in Stockholm. Aaron and Jasmine currently have weekly residencies at Proud Cabaret and Circus London where they perform their unique sensual and high energy routines. ",
            'paragraph2'        =>"The pair created, directed and choreographed their own dance spectacular, a  two hour theatre dance show “Dance The Night Away”  consisting six dancers and one singer. They toured Sweden with the show in the autumn of 2019 receiving five star reviews and standing ovations across the country. The show is now being booked internationally for various private events.",
            'paragraph3'        =>"English born, London/Stockholm based Aaron Brown trained at Laine Theatre arts in London. Aaron has performed internationally as a ballroom/latin & commercial dancer, appearing in numerous Live Stage Performances, Tours, Music Videos, Corporate Events, Commercials, Film & TV Shows for BBC, ITV, CHANNEL 4, SKY.",
            'paragraph4'        =>"Swedish born London/Stockholm based Jasmine Takacs trained at The London Studio Centre and has performed internationally as ballroom/latin and a commercial dancer for numerous famous artists. To name a few: Rhianna, Justin Bieber, Katy Perry, Jason Derulo, Taylor Swift, One Direction, Ellie Goulding, Pink, Kelly Clarkson, Lou Bega, Cee Lo Green, Florence and the Machines, Olly Murs, Steps, Gary Barlow and many more…
Jasmine has also featured in Hollywood films such as James Bond 007 ‘Spectre’ where she is the iconic dancing silhouette during the opening titles, ‘Beauty and the Beast’, Stephen Spielberg’s ‘Ready Player One’,’ Mamma Mia 2’.  Jasmine has worked as a ballroom/latin dancer internationally on private events, VIP clients, royals, appeared on Strictly Come Dancing Live TV Shows as a troupe dancer since 2013-2018, SCD UK arena tours, Strictly themed cruises, tours and events.",
            'cover_img'        =>"/assets1/images/artists/2399_1654853080.jpg",
            'meta_keywords'=>'DANCERS, SPECIALIST ACT , London entertainments',
            'meta_title'=>'Aaron brown and Jasmine Takacs',
            'meta_description'=>'Jasmine Takacs & Aaron Brown met in London and have danced together since 2015',
            'video_url'=>"",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('artists')->insert([

            'name'          =>"Chez",
            'surname'          =>"Taylor",
            'slug'          =>"chez_taylor",
            'phone'          =>"+44 7234 234 567",
            'city'        =>"London",
            'email'          =>"info@oriartists.co.uk",
            'instagram'      =>"https://instagram.com/faithbayless",
            'website'      =>"https://faithbayless.com",
            'youtube'       =>"https://www.youtube.com/faithbayless",
            'facebook'       =>"https://www.facebook.com/faithbayless",
            'twitter'        =>"https://twitter.com/faithbayless",
            'paragraph1'        =>"Chez Tayor has an addiction to jazz, funk and soul. Doubling sax with flute, and clarinet has led her to play such main stages as Wembley Stadium (London), The NIA (Birmingham), Newton’s Nation (Australia), Alliance Francaise (Zambia) and many more. Her performances have been acclaimed by the likes of The British Arts Council and The BBC.Chez has been lucky to support some fantastic acts such as The Jools Holland Big Band, Chic, Mark Ronson and magician legend Dynamo. She has performed for the likes of Jaz Dhami, Thunder, Tony Hadley, Gareth Gates and Shane Richie, as well as leading record labels Hed Kandi and Sony Music. Clients include David Gilmore, Daniel Craig, David Cameron and Richard Branson.Throughout her career, Chez has been fortunate to collect passport stamps from all over the world; from Bruges to Botswana, Turkey to Thailand, Dubrovnik to Dubai and countless other destinations.",
            'paragraph2'        =>"Chez writes and arranges music for her many bands &amp; ensembles. In the composition world, Chez has written for online games companies, news corporations and the Edinburgh Film Festival, to name a few, as well as releasing material with her bands on iTunes.Polished, unique and dependable, Chez Taylor is quickly becoming a prominent female artist on the London jazz and pop scene",
            'paragraph3'        =>"",
            'paragraph4'        =>"",
            'cover_img'        =>"/assets1/images/artists/1333_1654860195.jpg",
            'meta_keywords'=>'',
            'meta_title'=>'',
            'meta_description'=>'',
            'video_url'=>"",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('artists')->insert([

            'name'          =>"Conleth",
            'surname'          =>"Kane",
            'slug'          =>"Conleth_Kane",
            'phone'          =>"+44 7234 234 567",
            'city'        =>"London",
            'email'          =>"info@oriartists.co.uk",
            'instagram'      =>"https://instagram.com/faithbayless",
            'website'      =>"https://faithbayless.com",
            'youtube'       =>"https://www.youtube.com/faithbayless",
            'facebook'       =>"https://www.facebook.com/faithbayless",
            'twitter'        =>"https://twitter.com/faithbayless",
            'paragraph1'        =>"Described by OK Magazine! as 'the breath of fresh air we all need right now' and QX Magazine as 'an infectiously energetic, refreshingly cheerful Singer/Songwriter', Conleth Kane recorded his debut album 'Proud - Live in London' at a sold out show at The Crazy Coqs in London's West End in Oct 2018 seeing him shoot to Number 2 on the iTunes Singer/Songwriter Charts in Feb 2019. He released his self-penned debut EP in August 2020 which went to Number 7 on the iTunes Singer/Songwriter Chart.",
            'paragraph2'        =>"Conleth has performed live sets of his own songs on both BBC Radio London, BBC Radio Ulster, and Northern Ireland's Number 1 Radio Station, Cool FM. 2017 saw Conleth win the 'Personal Contribution to the LGBTQ Community' at the annual GNI Magazine Awards in Belfast - voted for by the public.",
            'paragraph3'        =>"Conleth has toured his music all over the world including Europe and Australia as well as performing as a special guest for the London Gay Men's Chorus and the Gay Mens Dance Company at Pride in London and The Troxy in London. His song ‘Proud’ has just been remixed by world-leading pop producers ‘7th Heaven’ and was released last year - it’s available now on all major music platforms.",
            'paragraph4'        =>"In 2022, Conleth released his new EP 'Just A Dream' and performed his own sets at Mighty Hoopla, Pride in London and Eclectic Love.

'A voice that would melt your heart' - Gaby Roslin BBC Radio London

'Brilliant music!' - Gay Times Magazine

'Proud by Conleth Kane is an anthem for our times' - Out News Global

'Proud was always set to be an LGBTQI anthem. With this brand-new accompanying video, Conleth has confirmed his queer icon status and showed us all how to live without fearing what other’s think' - Diva Magazine",
            'cover_img'        =>"/assets1/images/artists/5688_1654886725.jpg",
            'meta_keywords'=>'',
            'meta_title'=>'',
            'meta_description'=>'',
            'video_url'=>"",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
        DB::table('artists')->insert([

            'name'          =>"Lovri",
            'surname'          =>"Beth",
            'slug'          =>"lovri_beth",
            'phone'          =>"+44 7234 234 567",
            'city'        =>"London",
            'email'          =>"info@oriartists.co.uk",
            'instagram'      =>"https://instagram.com/faithbayless",
            'website'      =>"https://faithbayless.com",
            'youtube'       =>"https://www.youtube.com/faithbayless",
            'facebook'       =>"https://www.facebook.com/faithbayless",
            'twitter'        =>"https://twitter.com/faithbayless",
            'paragraph1'        =>"Lowri started as a competitive Latin and Ballroom dancer taking various Welsh and British titles throughout her teens. She then went on to train in various styles at London Studio Centre gaining a 1st Class BA Honours degree in Musical Theatre Dance.",
            'paragraph2'        =>"Some of Lowri's credits include:
-Production dancer on Cunard Queen Mary 2 world voyage
-Dancer on AJ Pritchard's solo U.K tour
-Dancer in BBC series 'SAS Rogue Heroes'
-Dancer in Pizza Express commercial
-Dancer for Disney's 'Encanto' movie premiere
-Dancer on touring production show 'Dance The Night Away’
-Dancer on ‘Freedom’ UK tour with Johannes Radebe
-Dancer on 'Him & Me’ UK tour with Anton Du Beke & Giovanni Pernice",
            'paragraph3'        =>"",
            'paragraph4'        =>"",
            'cover_img'        =>"/assets1/images/artists/6633_1654886919.jpg",
            'meta_keywords'=>'',
            'meta_title'=>'',
            'meta_description'=>'',
            'video_url'=>"",
            "created_at"=>date("Y-m-d"),
            "updated_at"=>date("Y-m-d"),
        ]);
    }
}
