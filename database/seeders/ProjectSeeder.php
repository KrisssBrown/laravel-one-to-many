<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) {

            $project = new Project();
            $project->nome_progetto = $faker->unique()->sentence($faker->numberBetween(3, 5));
            $project->cliente = $faker->name();
            $project->descrizione= $faker->optional()->text(500);
            $project->project_url = $faker->optional()->url();
            $project->slug = Str::slug($project->title, '-');
            $project->save();
        }
    }
}
