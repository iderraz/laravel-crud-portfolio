<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'titre1' => 'About',
            'description1'=> 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. ',
            'sous-titre1'=> 'UI/UX Designer & Web Developer.',
            'sous-description1'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.',
            'birthday'=> '1 May 1995',
            'website'=> 'www.example.com',
            'phone'=> '+123 456 7890',
            'city'=> 'City : New York, USA',
            'age'=> 30,
            'degree'=> 'Master',
            'email'=> 'email@example.com',
            'freelance'=> 'Available',
            'finale-description'=> 'Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.',
        ]);
    }
}
