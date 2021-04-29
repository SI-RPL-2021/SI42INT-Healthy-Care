<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = [
            [
                'username' => 'Admin1',
                'email' => 'Admin1@gmail.com',
                'email_verified_at' => now(),
                'password'=>'123456789',
                'role'=>'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'Admin2',
                'email' => 'Admin2@gmail.com',
                'email_verified_at' => now(),
                'password'=>'123456789',
                'role'=>'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'Doctor1',
                'email' => 'Doctor1@gmail.com',
                'email_verified_at' => now(),
                'password'=>'123456789',
                'role'=>'doctor',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'Doctor2',
                'email' => 'Doctor2@gmail.com',
                'email_verified_at' => now(),
                'password'=>'123456789',
                'role'=>'doctor',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'Nurse1',
                'email' => 'Nurse1@gmail.com',
                'email_verified_at' => now(),
                'password'=>'123456789',
                'role'=>'nurse',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'Nurse2',
                'email' => 'Nurse2@gmail.com',
                'email_verified_at' => now(),
                'password'=>'123456789',
                'role'=>'nurse',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'Patient1',
                'email' => 'Patient1@gmail.com',
                'email_verified_at' => now(),
                'password'=>'123456789',
                'role'=>'patient',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'username' => 'Patient2',
                'email' => 'Patient2@gmail.com',
                'email_verified_at' => now(),
                'password'=>'123456789',
                'role'=>'patient',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
