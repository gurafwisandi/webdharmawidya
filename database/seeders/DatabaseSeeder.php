<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            userSeeder::class,
            settingsSeeder::class,
            activitySeeder::class,
            gallerySeeder::class,
            slidersSeeder::class,
            servicesSeeder::class,
            commentsSeeder::class,
            informationSeeder::class,
            foundersSeeder::class,
            categoriesSeeder::class,
            articlesSeeder::class,
            MetodePembelajaranSeeder::class,
            EskulSeeder::class,
            taglineSeeder::class,
            CareersSeeder::class,
            guruSeeder::class,
            fasilitasSeeder::class,
            fasilitasImageSeeder::class,
        ]);
    }
}
