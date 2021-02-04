<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'category_id' => $this->faker->randomDigitNotNull,
        'name' => $this->faker->word,
        'name_lang' => $this->faker->text,
        'description' => $this->faker->text,
        'description_lang' => $this->faker->text,
        'icon' => $this->faker->word,
        'image' => $this->faker->word,
        'path_blade' => $this->faker->word,
        'link' => $this->faker->word,
        'active' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
