<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>$var1 = $this->faker->name,
            'slug'  =>Str::slug($var1),
            'content'=>$this->faker->text,
            'category_id'=>rand(1,10),
            'user_id'=>rand(1,10),
        ];
    }
}
