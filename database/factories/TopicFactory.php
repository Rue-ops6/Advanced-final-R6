<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
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
            'topicTitle' => fake()->randomElement(['Methodology', 'Intangible crafts', 'UCH', 'underdogs|storries', 'Dark Heritage']),
            'content' => fake()->text(),
            'views' => fake()->numberBetween(1, 10),
            'trendings' => fake()->numberBetween(1, 10),
            'published' => fake()->numberBetween(0, 1),
            #'image' => basename(fake()->image(public_path('assets/admin/images/topics/'))),
            'image' => $this->generateRandomImage(public_path('assets/admin/images/topics/')),
            'catID' => fake()->numberBetween(1, 5),
        ];
    }
}
