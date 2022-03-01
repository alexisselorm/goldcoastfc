<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\Player;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        News::factory(10)->create();
        Player::factory(20)->create();
    }
}
