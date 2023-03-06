<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Technology;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $technologies = ['HTML5', 'CSS3', 'JS ES6', 'PHP', 'Vue 3', 'Laravel 9', 'Bootstrap 5', 'SCSS', 'Vite', 'Node.js',  'React', 'Angular.js',];

        foreach ($technologies as $technology) {
            $newTechnologies = new Technology();
            $newTechnologies->name = $technology;
            $newTechnologies->bg_color = $faker->unique()->hexColor();
            $newTechnologies->slug = Str::slug($technology);
            $newTechnologies->save();
            $newTechnologies->slug = $newTechnologies->slug . "-$newTechnologies->id";
            $newTechnologies->update();
        }
    }
}
