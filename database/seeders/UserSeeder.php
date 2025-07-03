<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        // Create admin user
        $admin = User::create([
            'name' => 'Admin Dashboard',
            'email' => 'admin@dashboard-absen.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'status' => 'normal',
        ]);

        // Create sample mahasiswa users
        $mahasiswa1 = User::create([
            'name' => 'Ahmad Fauzi',
            'email' => 'ahmad.fauzi@student.ac.id',
            'password' => Hash::make('password'),
            'role' => 'mahasiswa',
            'status' => 'normal',
        ]);

        $mahasiswa2 = User::create([
            'name' => 'Siti Nurhaliza',
            'email' => 'siti.nurhaliza@student.ac.id',
            'password' => Hash::make('password'),
            'role' => 'mahasiswa',
            'status' => 'ketua_kelas',
        ]);

        $mahasiswa3 = User::create([
            'name' => 'Budi Santoso',
            'email' => 'budi.santoso@student.ac.id',
            'password' => Hash::make('password'),
            'role' => 'mahasiswa',
            'status' => 'normal',
        ]);

        // Create mahasiswa records
        Mahasiswa::create([
            'user_id' => $mahasiswa1->id,
            'nim' => '2021001',
            'kelas' => '3A',
            'jurusan' => 'Teknik Informatika',
        ]);

        Mahasiswa::create([
            'user_id' => $mahasiswa2->id,
            'nim' => '2021002',
            'kelas' => '3A',
            'jurusan' => 'Teknik Informatika',
        ]);

        Mahasiswa::create([
            'user_id' => $mahasiswa3->id,
            'nim' => '2021003',
            'kelas' => '3B',
            'jurusan' => 'Sistem Informasi',
        ]);
    }
}
