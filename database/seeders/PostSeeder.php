<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Post::truncate();
        //DB::statement('SET FOREIGN_KEY_CHECKS=1');


        for ($i=0 ; $i < 20 ; $i++) { 
            $title = Str::random(20);
            //$title = str()->random(20);
            $c = Category::inRandomOrder()->first();

            Post::create([


                'title' => $title,
                'slug' => Str::slug($title),
          //      'slug' => Str::slug($title),
                'content' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim delectus dicta earum fugit unde facilis dignissimos aut eum repellendus error!</p>',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. ',
                'posted' => 'yes',
                'category_id' =>  $c->id,
            ]); 
        }
    }
}
