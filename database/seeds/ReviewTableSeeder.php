<?php

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create([
            'review' => 'Lorem Ipsum blablablabla',
            '3,1' => '1'
        ]);
    }
}
