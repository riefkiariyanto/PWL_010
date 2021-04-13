<?php

namespace Database\Factories;

use App\Models\Home;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;


class HomeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Home::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->words($nb =4 , $asText = true);
        $slug = Str::slug($title);
        return [
            'title' => $title,
            'slug' => $slug,
            'image' => 'tm-img-310x180-'. $this->faker->unique()->numberBetween(1,6),
            'content' => $this->faker->text(500)

        ];
    }
}
