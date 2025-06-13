<?php

namespace Database\Seeders;

use App\Models\Lecturers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LecturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lecturers::create([
            'lecturer_id' => (string) Str::ulid(),
            'name' => 'Dr. John Doe',
            'NIP' => '198003112000121001',
            'department' => 'Computer Science',
            'email' => 'john.doe@ifump.net',
        ]);

        Lecturers::create([
            'lecturer_id' => (string) Str::ulid(),
            'name' => 'Prof. Jane Smith',
            'NIP' => '197512102000122002',
            'department' => 'Information Technology',
            'email' => 'jane.smith@ifump.net',
        ]);
    }
}