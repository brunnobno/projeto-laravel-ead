<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Turma>
 */
class CourseClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'              => $name = "Class " . $this->faker->name(),
            'small_description' => $this->faker->sentence(6),
            'long_description'  => $this->faker->sentence(20),
            'slug'              => \Str::slug($name),
            'cover_image'       => $this->faker->imageUrl(640, 480),
            'status'            => 1,
            'price'             => $this->faker->randomFloat(2, 0, 100),
            'start_date'        => $this->faker->dateTimeBetween('now', '+2 months'),
            'end_date'          => $this->faker->dateTimeBetween('+2 months', '+6 months'),
            'start_time'        => null,
            'end_time'          => null,
            'location'          => null,
            'online'            => true,
            'active'            => true,
            'course_id'         => Course::factory(),
        ];
    }
}
