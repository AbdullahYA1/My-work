<?php

namespace Database\Seeders;

use App\Models\Crud;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Crud::factory()
        ->count(10)
        ->state(new Sequence(
            ['status' => 'enable', 'show' => 0],
            ['status' => 'disable', 'show' => 1],
        ))
        ->create();
    
    }
}
