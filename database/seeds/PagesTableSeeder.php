<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'title' => 'Home Page',
                'slug' => 'home',
                'content' => 'This is the Home Page'
            ],
            [
                'title' => 'About Page',
                'slug' => 'about',
                'content' => 'This is the About Page'
            ],
            [
                'title' => 'Contact Page',
                'slug' => 'contact',
                'content' => 'This is the Contact Page'
            ],
            [
                'title' => 'Work Page',
                'slug' => 'work',
                'content' => 'This is the Work Page'
            ]

        ]);
    }
}
