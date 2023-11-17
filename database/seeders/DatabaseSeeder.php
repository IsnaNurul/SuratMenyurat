<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('unit_kerjas')->insert(
            [
                 'nama_unit_kerja' => 'Super User',
            ],
        );
        DB::table('unit_kerjas')->insert(
            [
                'nama_unit_kerja' => 'Administrasi',
            ],
        );
        DB::table('unit_kerjas')->insert(
            [
                'nama_unit_kerja' => 'Sekretaris',
            ],
        );
        DB::table('unit_kerjas')->insert(
            [
                'nama_unit_kerja' => 'Bendahara',
            ],
        );
        DB::table('unit_kerjas')->insert(
            [
                'nama_unit_kerja' => 'KU Umum',
            ],
        );
        

        DB::table('users')->insert(
            [
                'name' => 'Super Admin',
                'role' => 'superadmin',
                'password' => bcrypt('12341234'),
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'bandung',
                'username' => 'superadmin',
                'id_unit_kerja' => '1',
                'telp' => '098876532456',
            ],
        );
        DB::table('users')->insert(
            [
                'name' => 'Admin',
                'role' => 'admin',
                'password' => bcrypt('12341234'),
                'jenis_kelamin' => 'perempuan',
                'alamat' => 'bandung',
                'username' => 'admin',
                'id_unit_kerja' => '2',
                'telp' => '098876532456',
            ],
        );
        

        DB::table('lembagas')->insert(
            [
                'nama_lembaga' => 'SMK YPC Tasikmalaya',
                'kabupaten' => 'Kab. Tasikmalaya',
                'telp' => '123456789009',
                'email' => 'smkypctasikmalaya@gmail.com',
                'alamat' => 'Tasikmalaya',
                'nama_ketua' => 'Drs. Ujang Sanusi M.M',
            ],
        );
        
    }
}
