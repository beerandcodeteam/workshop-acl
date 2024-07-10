<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::factory()->createMany([
            ['name' => 'create-module'],
            ['name' => 'view-any-module'],
            ['name' => 'view-module'],
            ['name' => 'update-module'],
            ['name' => 'delete-module'],
            ['name' => 'create-content'],
            ['name' => 'view-any-content'],
            ['name' => 'view-content'],
            ['name' => 'update-content'],
            ['name' => 'delete-content'],
            ['name' => 'create-comment'],
            ['name' => 'view-any-comment'],
            ['name' => 'view-comment'],
            ['name' => 'update-comment'],
            ['name' => 'delete-comment'],
            ['name' => 'create-role'],
            ['name' => 'view-any-role'],
            ['name' => 'view-role'],
            ['name' => 'update-role'],
            ['name' => 'delete-role'],
            ['name' => 'create-role'],
            ['name' => 'view-any-permission'],
            ['name' => 'view-permission'],
            ['name' => 'update-permission'],
            ['name' => 'delete-permission'],
        ]);
    }
}
