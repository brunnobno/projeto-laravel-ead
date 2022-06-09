<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'                 => $title = "Course " . $this->faker->sentence(),
            'slug'                  => \Str::slug($title),
            'long_description'      => "Some description here. " . $this->faker->paragraph(),
            'banner_source_type'    => null,
            'banner_src'            => null,
            'active'                => true,
        ];
    }
}
