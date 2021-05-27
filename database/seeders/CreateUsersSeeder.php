<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Nurse;
use App\Models\Patient;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            [
                'user_id' => '1',
                'full_name' => 'Admin 1',
                'phone_number' => '0987654321',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '2',
                'full_name' => 'Admin 2',
                'phone_number' => '0987654321',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($admin as $key => $value) {
            Admin::create($value);
        }

        $doctor = [
            [
                'user_id' => '3',
                'full_name' => 'Doctor 1',
                'specialist' => 'Specialist Anak',
                'phone_number' => '0987654321',
                'address' => 'Karawang',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '4',
                'full_name' => 'Doctor 2',
                'specialist' => 'Umum',
                'phone_number' => '0987654321',
                'address' => 'Bandung',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($doctor as $key => $value) {
            Doctor::create($value);
        }

        $nurse = [
            [
                'user_id' => '5',
                'full_name' => 'Nurse 1',
                'phone_number' => '0987654321',
                'age' => '29',
                'birth' => '2021-05-01',
                'gender' => 'female',
                'address' => 'Karawang',
                'unit' => 'Puskesmas',
                'instance' => 'Puskesmas',
                'religion' => 'Islam',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '6',
                'full_name' => 'Nurse 2',
                'phone_number' => '0987654321',
                'age' => '30',
                'birth' => '2021-05-02',
                'gender' => 'male',
                'address' => 'Bandung',
                'unit' => 'Rumah Sakit',
                'instance' => 'Rumah Sakit',
                'religion' => 'Kristen',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($nurse as $key => $value) {
            Nurse::create($value);
        }

        $patient = [
            [
                'user_id' => '7',
                'full_name' => 'Patient 1',
                'phone_number' => '0987654321',
                'gender' => 'female',
                'address' => 'Karawang',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => '8',
                'full_name' => 'Patient 2',
                'phone_number' => '0987654321',
                'gender' => 'male',
                'address' => 'Bandung',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($patient as $key => $value) {
            Patient::create($value);
        }
    }
}
