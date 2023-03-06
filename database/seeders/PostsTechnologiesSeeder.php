<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Technology;

class PostsTechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $posts = Post::all();

        $technologiesID = Technology::all()->pluck('id');

        foreach ($posts as $post) {
            $post->technologies()->attach($faker->randomElements($technologiesID, 2));
        }
    }
}
