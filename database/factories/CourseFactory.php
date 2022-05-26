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
            'price'                 => rand(0, 1000).".00",
            'discount'              => 0,
            'discount_type'         => 'value', //percent|value
            'will_start_in'         => null,
            'will_end_in'           => null,
            'active'                => true,
        ];
    }
}
