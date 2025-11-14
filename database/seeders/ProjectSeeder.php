<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'project_code' => 'PRJ-001',
                'name' => 'Apartment Expansion Rotterdam',
                'status' => 'on_hold',
                'start_date' => '2024-09-07',
            ],
            [
                'project_code' => 'PRJ-002',
                'name' => 'Office Expansion Utrecht',
                'status' => 'cancelled',
                'start_date' => '2024-03-30',
            ],
            [
                'project_code' => 'PRJ-003',
                'name' => 'Hospital Build Rotterdam',
                'status' => 'planned',
                'start_date' => '2024-04-05',
            ],
            [
                'project_code' => 'PRJ-004',
                'name' => 'Office Expansion Breda',
                'status' => 'cancelled',
                'start_date' => '2024-01-28',
            ],
            [
                'project_code' => 'PRJ-005',
                'name' => 'Hospital Expansion Breda',
                'status' => 'completed',
                'start_date' => '2024-08-13',
            ],
            [
                'project_code' => 'PRJ-006',
                'name' => 'School Renovation Groningen',
                'status' => 'planned',
                'start_date' => '2024-06-12',
            ],
            [
                'project_code' => 'PRJ-007',
                'name' => 'Apartment Build Den Haag',
                'status' => 'on_hold',
                'start_date' => '2024-06-08',
            ],
            [
                'project_code' => 'PRJ-008',
                'name' => 'Office Build Utrecht',
                'status' => 'planned',
                'start_date' => '2025-01-24',
            ],
            [
                'project_code' => 'PRJ-009',
                'name' => 'Warehouse Build Den Haag',
                'status' => 'cancelled',
                'start_date' => '2024-09-27',
            ],
            [
                'project_code' => 'PRJ-010',
                'name' => 'Warehouse Renovation Tilburg',
                'status' => 'cancelled',
                'start_date' => '2024-05-07',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
