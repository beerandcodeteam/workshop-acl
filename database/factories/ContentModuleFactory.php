<?php

namespace Database\Factories;

use App\Models\Content;
use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContentModule>
 */
class ContentModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content_id' => Content::inRandomOrder()->first()->id,
            'module_id' => Module::inRandomOrder()->first()->id,
        ];
    }
}
