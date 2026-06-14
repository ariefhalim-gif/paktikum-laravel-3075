<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\PartnerSeeder;


class DatabaseSeeder extends Seeder
{

    use WithoutModelEvents;


    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // =========================
        // ADMIN USER
        // =========================


        \App\Models\User::firstOrCreate(

            [
                'email' => 'admin@amikom.ac.id'
            ],

            [
                'name' => 'Admin Amikom',

                'password' => bcrypt('password'),

                'role' => 'admin'
            ]

        );





        // =========================
        // CATEGORY DATA
        // =========================


        $cat1 = \App\Models\Category::firstOrCreate(

            [
                'slug' => 'seminar'
            ],

            [
                'name' => 'Seminar'
            ]

        );



        $cat2 = \App\Models\Category::firstOrCreate(

            [
                'slug' => 'workshop'
            ],

            [
                'name' => 'Workshop'
            ]

        );



        $cat3 = \App\Models\Category::firstOrCreate(

            [
                'slug' => 'entertainment'
            ],

            [
                'name' => 'Entertainment'
            ]

        );







        // =========================
        // EVENT DATA
        // =========================


        \App\Models\Event::firstOrCreate(

            [
                'title' => 'AI Summit 2026'
            ],

            [

                'category_id' => $cat1->id,

                'description' => 'Seminar AI terbaru',

                'date' => '2026-06-20 09:00:00',

                'location' => 'Gedung Amikom',

                'price' => 50000,

                'stock' => 100,

                'poster_path' => 'assets/hackathon.png'

            ]

        );





        \App\Models\Event::firstOrCreate(

            [
                'title' => 'Laravel Workshop'
            ],

            [

                'category_id' => $cat2->id,

                'description' => 'Belajar Laravel',

                'date' => '2026-07-01 10:00:00',

                'location' => 'Lab SI',

                'price' => 75000,

                'stock' => 50,

                'poster_path' => 'assets/workshop.png'

            ]

        );





        \App\Models\Event::firstOrCreate(

            [
                'title' => 'Music Festival'
            ],

            [

                'category_id' => $cat3->id,

                'description' => 'Festival musik kampus',

                'date' => '2026-08-10 19:00:00',

                'location' => 'Lapangan Kampus',

                'price' => 100000,

                'stock' => 200,

                'poster_path' => 'assets/concert.png'

            ]

        );







        // =========================
        // PARTNER SEEDER
        // =========================


        $this->call([

            PartnerSeeder::class

        ]);



    }

}