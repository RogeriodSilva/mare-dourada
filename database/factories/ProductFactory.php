<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Collection;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $name = $this->faker->name();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 200, 2500),
            'quantity' => $this->faker->randomNumber(2),
            'collection_id' => Collection::all()->random()->id,
            'category_id' => Category::all()->random()->id
        ];
    }
}
