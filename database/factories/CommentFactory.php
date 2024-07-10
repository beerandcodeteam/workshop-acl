<?php

namespace Database\Factories;

use App\Models\ContentModule;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment_id' => null,
            'user_id' => User::factory(),
            'content_module_id' => ContentModule::factory(),
            'comment' => $this->faker->text(),
        ];
    }
}
