<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    private function generateRandomImage($path)
    {
        $files = scandir($path);
        $files = array_diff($files, array('.', '..'));
        return fake()->randomElement($files);
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Emily', 'Johnathan', 'Kurtis']),
            'content' => fake()->text(),
            'published' => fake()->numberBetween(0, 1),
            #'image' => basename(fake()->image(public_path('assets/admin/images/testimonials/'))),
            'image' => $this->generateRandomImage(public_path('assets/admin/images/testimonials/')),
        ];
    }
}
