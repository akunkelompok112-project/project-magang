<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            ['name' => 'admin', 'display_name' => 'Administrator'],
            ['name' => 'dosen', 'display_name' => 'Dosen'],
            ['name' => 'mahasiswa', 'display_name' => 'Mahasiswa'],
        ]);
    }
}

