<?php

namespace Database\Factories\Api;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Api\Article;
use App\Models\Api\Category;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    protected $model = Article::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(mt_rand(1, 5), true);
        $txt = $this->faker->realText(mt_rand(20, 200));
        $createdAt = $this->faker->dateTimeBetween('-3 months', '-2 days');

        return [
            'title'        => $title,
            'slug'         => Str::slug($title),
            'excerpt'      => $this->faker->text(mt_rand(40, 100)),
            'content'      => $txt,
            'image'        => $this->faker->imageUrl(),
            'likes'        => random_int(1, 2000000),
            'category_id'  => Category::get()->random()->id,
            'created_at'   => $createdAt,
            'updated_at'   => $createdAt,
        ];
    }
}
