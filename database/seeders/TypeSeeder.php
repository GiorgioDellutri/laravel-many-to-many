<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Coding', 'Full-Stack', 'News', 'Devops'];

        foreach ($types as $typeName) {
            $type = new Type();
            $type->name = $typeName;
            $type->save();
        }
    }
}
