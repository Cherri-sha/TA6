<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // 5 Akun Dummy Petugas BPBD
        for ($i = 0; $i < 5; $i++) {
            DB::table('users')->insert([
                'name'       => 'Petugas ' . $faker->name,
                'email'      => $faker->unique()->safeEmail,
                'password'   => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // 1 Akun Admin Utama BPBD
        DB::table('users')->insert([
            'name'       => 'Admin Utama BPBD',
            'email'      => 'admin.bpbd@bandung.go.id',
            'password'   => Hash::make('adminbpbd2026'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}