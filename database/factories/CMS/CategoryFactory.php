<?php

namespace Database\Factories\CMS;

use App\Models\CMS\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Category::class;
    public function definition(): array
    {
        return [
            'category_name' => $this->faker->name(),
            'category_desc' => $this->faker->text(),
        ];
    }
}
