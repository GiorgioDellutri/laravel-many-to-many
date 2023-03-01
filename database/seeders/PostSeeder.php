<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Type;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str as Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $types = Type::all();

        for ($i = 0; $i < 100; $i++) {
            $newPost = new Post();
            $newPost->type_id = Type::inRandomOrder()->first()->id;
            $newPost->slug = Str::slug($newPost->title);
            "Ciao a tutti ";
            $newPost->title = $faker->unique()->realTextBetween(5, 20);
            $newPost->author = $faker->name();
            $newPost->content = $faker->realTextBetween(600, 800);
            $newPost->post_date = $faker->date();
            $newPost->save();
        }
    }
}
