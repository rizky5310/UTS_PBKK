<?php

namespace Database\Seeders;

use App\Models\Students;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Students::create([
            'name' => 'John Doe',
            'email' => 'john.doe@ifump.net',
            'NIM' => 'IF123456',
            'major' => 'Computer Science',
            'enrollment_year' => Carbon::now()->subYears(2),
        ]);

        // Optional: Additional sample students
        Students::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@ifump.net',
            'NIM' => 'IF654321',
            'major' => 'Information Systems',
            'enrollment_year' => Carbon::now()->subYear(),
        ]);
    }
}