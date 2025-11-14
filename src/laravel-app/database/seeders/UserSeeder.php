<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil role_id dari tabel roles
        // $dosenRoleId = Role::where('name', 'dosen')->first()->id;
        // $mahasiswaRoleId = Role::where('name', 'mahasiswa')->first()->id;
        $adminRoleId = Role::where('name', 'admin')->first()->id;

        // Seeder dosen
        // DB::table('users')->insert([
        //     [
        //         'name' => 'Dr. Ahmad Fauzi',
        //         'email' => 'dosen1@example.com',
        //         'password' => Hash::make('password123'),
        //         'nip' => '1987654321',
        //         'role_id' => $dosenRoleId,
        //         'is_active' => true,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Dr. Siti Rahma',
        //         'email' => 'dosen2@example.com',
        //         'password' => Hash::make('password123'),
        //         'nip' => '1987654322',
        //         'role_id' => $dosenRoleId,
        //         'is_active' => true,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]
        // ]);

        // Seeder mahasiswa
        // DB::table('users')->insert([
        //     [
        //         'name' => 'Andi Wijaya',
        //         'email' => 'mahasiswa1@example.com',
        //         'password' => Hash::make('password123'),
        //         'nim' => '20190001',
        //         'role_id' => $mahasiswaRoleId,
        //         'is_active' => true,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Rina Putri',
        //         'email' => 'mahasiswa2@example.com',
        //         'password' => Hash::make('password123'),
        //         'nim' => '20190002',
        //         'role_id' => $mahasiswaRoleId,
        //         'is_active' => true,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]
        // ]);
        DB::table('users')->insert([
            [
                'name' => 'Administrator 1',
                'email' => 'admin1@example.com',
                'password' => Hash::make('password123'),
                'role_id' => $adminRoleId,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Administrator 2',
                'email' => 'admin2@example.com',
                'password' => Hash::make('password123'),
                'role_id' => $adminRoleId,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
