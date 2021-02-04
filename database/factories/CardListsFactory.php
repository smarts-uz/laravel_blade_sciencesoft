<?php

namespace Database\Factories;

use App\Models\CardLists;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardListsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CardLists::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->word,
        'title' => $this->faker->word,
        'sub_title' => $this->faker->word,
        'description' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
