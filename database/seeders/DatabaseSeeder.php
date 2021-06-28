<?php

namespace Database\Seeders;

use App\Models\Action;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Reply;
use App\Models\User;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
         Comment::factory(10)->create();
         Reply::factory(10)->create();
        $categories = [
                [
                    'name' => $var1 ="One",
                    'slug' => Str::slug($var1),
                    'description' => "text",
                    'created_at'=>now(),
                    'parent_id' => 0,
                ],
                [
                'name' => $var1 ="Two",
                'slug' => Str::slug($var1),
                'description' => "text",
                'created_at'=>now(),
                'parent_id' => 1,
                ],
                [
                'name' => $var1 ="Three",
                'slug' => Str::slug($var1),
                'description' => "text",
                'created_at'=>now(),
                'parent_id' => 2,
                ],
                [
                'name' => $var1 ="Four",
                'slug' => Str::slug($var1),
                'description' => "text",
                'created_at'=>now(),
                'parent_id' => 3,
                ],
                [
                'name' => $var1 ="Five",
                'slug' => Str::slug($var1),
                'description' => "text",
                'created_at'=>now(),
                'parent_id' => 3,
                ],
                [
                'name' => $var1 ="Six",
                'slug' => Str::slug($var1),
                'description' => "text",
                'created_at'=>now(),
                'parent_id' => 3,
                ],
                [
                'name' => $var1 ="Seven",
                'slug' => Str::slug($var1),
                'description' => "text",
                'created_at'=>now(),
                'parent_id' => 3,
                ],
                [
                'name' => $var1 ="Eight",
                'slug' => Str::slug($var1),
                'description' => "text",
                'created_at'=>now(),
                'parent_id' => 3,
                ],
        ];
        // Category::insert($categories);
    }
}
