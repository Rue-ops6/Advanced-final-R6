<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Testimonial;
use App\Models\Topic;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Testimonial::factory(10)->create();
        Contact::factory(10)->create();
        Category::factory(5)->create(); #have to be created first, then to be linked with topics
        Topic::factory(10)->create();

        /*User::factory()->create([
    'name' => 'Test User',
    'email' => 'test@example.com',
    ]);*/
    }
}
