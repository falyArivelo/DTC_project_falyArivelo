<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['id' => 1, 'name' => 'direction']);
        Role::create(['id' => 2, 'name' => 'professeur']);
        Role::create(['id' => 3, 'name' => 'eleve']);
    }
}
