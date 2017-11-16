<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create([
            'title' => 'Programming',
        ]);

        App\Category::create([
            'title' => 'Work',
        ]);
    }
}
