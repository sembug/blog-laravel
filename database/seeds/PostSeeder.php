<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Post::create([
            'title' => 'Lorem Ipsum',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis at arcu sit amet ornare. Nullam non turpis metus. Vivamus sit amet massa vel ex porttitor molestie nec ut mauris. Cras quis accumsan turpis, non euismod nisl. Suspendisse a augue bibendum, egestas diam eu, auctor libero. Nunc hendrerit est eleifend metus hendrerit consectetur. Vivamus ac est in dolor eleifend luctus vel et elit. Suspendisse et purus nec turpis lacinia venenatis. Maecenas vel ex tincidunt nulla rutrum tempor vel nec purus.',
            'pub_date' => new Carbon(),
            'author' => 'Roberto',
            'category_id' => 1
        ]);
    }
}
