<?php



use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            ContactSeeder::class,
            SliderSeeder::class,
            HelloSeeder::class,
            TestimonialSeeder::class,
            ServiceSeeder::class,
            AboutSeeder::class,
            JoinSeeder::class,
            BookArtistSeeder::class,
            CategorySeeder::class,
            ArtistSeeder::class,
            FieldSeeder::class,
            BookArtistPageSeeder::class,
            JoinPageSeeder::class,
            PhotoSeeder::class,
            PackageSeeder::class,
            PackageItemSeeder::class,
            OfferArtistSeeder::class,
            OfferClientSeeder::class


        ]);
    }
}
