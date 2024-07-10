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
            ['name' => 'create-student'],
            ['name' => 'view-any-student'],
            ['name' => 'view-student'],
            ['name' => 'update-student'],
            ['name' => 'delete-student'],
            ['name' => 'create-professor'],
            ['name' => 'view-any-professor'],
            ['name' => 'view-professor'],
            ['name' => 'update-professor'],
            ['name' => 'delete-professor'],
            ['name' => 'create-secretary'],
            ['name' => 'view-any-secretary'],
            ['name' => 'view-secretary'],
            ['name' => 'update-secretary'],
            ['name' => 'delete-secretary'],
            ['name' => 'comment'],
            ['name' => 'delete-comment'],
            ['name' => 'edit-comment'],
            ['name' => 'manage-comment'],
        ]);
    }
}
