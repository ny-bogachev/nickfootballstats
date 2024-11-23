<?php

namespace Database\Seeders;

use App\Models\Article;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Stadium;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Stadium::factory(10)->create();
        Article::factory(10)->create();
        User::factory(10)->create();
        Team::factory(10)->create();

        foreach(Article::all() as $article) {
            $list_of_teams = Team::inRandomOrder()->take(2)->get();

            $article->teams()->attach($list_of_teams);
        }


    }
}
