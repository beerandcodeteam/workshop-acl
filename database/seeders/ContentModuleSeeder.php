<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\ContentModule;
use Illuminate\Database\Seeder;

class ContentModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContentModule::factory()->count(20)->create();

        ContentModule::factory()->create([
            'content_id' => 1,
            'module_id' => 1,
        ]);

        Comment::factory()->count(20)->create([
            'content_module_id' => 21,
        ]);
    }
}
