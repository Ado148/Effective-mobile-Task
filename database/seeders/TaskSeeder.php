<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'REST API',
            'description' => 'This is a sample task description.',
            'status' => 'completed',
        ]);
        Task::create([
            'title' => 'Add simple Front-end',
            'description' => 'This is a sample task description.',
            'status' => 'pending',
        ]);
        Task::create([  
            'title' => 'Add Administration panel using Filament',
            'description' => 'This is a sample task description.',
            'status' => 'pending',
        ]); 
    }
}
