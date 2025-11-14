<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        $employees = [
            [
                'employee_code' => 'EMP-0001',
                'full_name' => 'Emma Kok',
                'role' => 'Engineer',
                'country' => 'DE',
            ],
            [
                'employee_code' => 'EMP-0002',
                'full_name' => 'Julia van Dijk',
                'role' => 'Site Supervisor',
                'country' => 'NL',
            ],
            [
                'employee_code' => 'EMP-0003',
                'full_name' => 'Nora de Vries',
                'role' => 'Estimator',
                'country' => 'DE',
            ],
            [
                'employee_code' => 'EMP-0004',
                'full_name' => 'Tess Bos',
                'role' => 'Site Supervisor',
                'country' => 'SE',
            ],
            [
                'employee_code' => 'EMP-0005',
                'full_name' => 'Emma Meijer',
                'role' => 'Safety Officer',
                'country' => 'ES',
            ],
            [
                'employee_code' => 'EMP-0006',
                'full_name' => 'Lars Mulder',
                'role' => 'Project Manager',
                'country' => 'BE',
            ],
            [
                'employee_code' => 'EMP-0007',
                'full_name' => 'Ava Mulder',
                'role' => 'Foreman',
                'country' => 'DK',
            ],
            [
                'employee_code' => 'EMP-0008',
                'full_name' => 'Sanne Smit',
                'role' => 'QS',
                'country' => 'DE',
            ],
            [
                'employee_code' => 'EMP-0009',
                'full_name' => 'Finn Jansen',
                'role' => 'Foreman',
                'country' => 'ES',
            ],
            [
                'employee_code' => 'EMP-0010',
                'full_name' => 'Tess Bakker',
                'role' => 'Site Supervisor',
                'country' => 'UK',
            ],
        ];

        foreach ($employees as $employee) {
            Employee::create($employee);
        }
    }
}
