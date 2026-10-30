<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vaccination;

class VaccinationSeeder extends Seeder
{
    public function run(): void
    {
        $rows = [
            ['patient_name' => 'Mirabel Madrigal', 'purok' => 'Purok Flores', 'vaccine' => 'BCG', 'dose' => '1st dose', 'scheduled_at' => '2026-03-15', 'status' => 'Done'],
            ['patient_name' => 'Luisa Madrigal', 'purok' => 'Purok Flores', 'vaccine' => 'Pentavalent', 'dose' => '2nd dose', 'scheduled_at' => '2026-04-10', 'status' => 'Done'],
            ['patient_name' => 'Isabela Madrigal', 'purok' => 'Purok Flores', 'vaccine' => 'Anti-Flu', 'dose' => 'Annual Booster', 'scheduled_at' => '2026-10-12', 'status' => 'Overdue'],
            ['patient_name' => 'Bruno Madrigal', 'purok' => 'Purok Flores', 'vaccine' => 'OPV', 'dose' => '1st dose', 'scheduled_at' => '2026-11-05', 'status' => 'Scheduled'],
            ['patient_name' => 'Dolores Madrigal', 'purok' => 'Purok Flores', 'vaccine' => 'MMR', 'dose' => '1st dose', 'scheduled_at' => '2026-11-20', 'status' => 'Scheduled'],
            ['patient_name' => 'Pepa Madrigal', 'purok' => 'Purok Flores', 'vaccine' => 'Anti-Rabies', 'dose' => 'Day 0 Post-Exposure', 'scheduled_at' => '2026-11-25', 'status' => 'Scheduled'],
            ['patient_name' => 'Antonio Madrigal', 'purok' => 'Purok Flores', 'vaccine' => 'Anti-Rabies', 'dose' => 'Day 3 Booster', 'scheduled_at' => '2026-01-28', 'status' => 'Scheduled'],
        ];

        foreach ($rows as $row) {
            Vaccination::create($row);
        }
    }
}
