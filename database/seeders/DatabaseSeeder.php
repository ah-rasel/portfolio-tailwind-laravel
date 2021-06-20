<?php

namespace Database\Seeders;

use App\Models\Action;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Database\Factories\CategoryFactory;
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
        $this->call([
            UserSeeder::class,
        ]);
         User::factory(15)->create();
         Action::factory(1)->create();
         Category::factory(10)->create();
         Post::factory(100)->create();
    }
}
