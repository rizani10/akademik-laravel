<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;
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
      
        Guru::create([
            'nama' => 'Muhammad Faisal',
            'nip' => '123456789',
            'nuptk' => '123456789',
            'jk' => 'Laki-Laki',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '1990-01-01',
            'alamat' => 'Jl. Kebon Kacang',
            'agama' => 'Islam',
            'kepegawaian' => 'PNS',
            'jenis_ptk' => 'Tenaga Administrasi',
            'no_hp' => '08123456789',
        ]);


        Kelas::create([
            'nama_kelas' => 'XII RPL 1',
            'guru_id' => 1,
        ]);


        Siswa::create([
            'kelas_id' => 1,
            'nama' => 'Muhammad Faisal Rizani',
        ]);

    }
}
