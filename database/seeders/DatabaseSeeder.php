<?php

namespace Database\Seeders;

use Database\Factories\ProductFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        (new UserFactory())->count(50)->create();
        (new ProductFactory())->count(100)->create();
    }
}
