<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
{


\App\Models\User::create([

'name'=>'Admin Amikom',

'email'=>'admin@amikom.ac.id',

'password'=>bcrypt('password'),

'role'=>'admin'

]);



$cat1 = \App\Models\Category::create([

'name'=>'Seminar',

'slug'=>'seminar'

]);


$cat2 = \App\Models\Category::create([

'name'=>'Workshop',

'slug'=>'workshop'

]);


$cat3 = \App\Models\Category::create([

'name'=>'Entertainment',

'slug'=>'entertainment'

]);



\App\Models\Event::create([

'category_id'=>$cat1->id,

'title'=>'AI Summit 2026',

'description'=>'Seminar AI terbaru',

'date'=>'2026-06-20 09:00:00',

'location'=>'Gedung Amikom',

'price'=>50000,

'stock'=>100,

'poster_path'=>'assets/hackathon.png'

]);



\App\Models\Event::create([

'category_id'=>$cat2->id,

'title'=>'Laravel Workshop',

'description'=>'Belajar Laravel',

'date'=>'2026-07-01 10:00:00',

'location'=>'Lab SI',

'price'=>75000,

'stock'=>50,

'poster_path'=>'assets/workshop.png'

]);



\App\Models\Event::create([

'category_id'=>$cat3->id,

'title'=>'Music Festival',

'description'=>'Festival musik kampus',

'date'=>'2026-08-10 19:00:00',

'location'=>'Lapangan Kampus',

'price'=>100000,

'stock'=>200,

'poster_path'=>'assets/concert.png'

]);


}
}
