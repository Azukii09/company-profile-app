<?php

namespace Database\Factories\CMS;

use App\Models\CMS\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Tag::class;
    public function definition(): array
    {
        return [
            'tag_name' => $this->faker->name(),
            'tag_desc' => $this->faker->text(),
        ];
    }
}
