<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Admin;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        Post::factory(10)->create();

        Admin::factory(1)->create([
            "name" => "Admin",
            "email" => "admin@admin.com",
            "password" => bcrypt('12345'),
        ]);
    }
}
