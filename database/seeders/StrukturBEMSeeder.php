<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StrukturBEM;

class StrukturBEMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Mengisi data awal untuk tabel struktur_bem
        StrukturBEM::create([
            'nama' => 'Jane Smith',
            'jabatan' => 'Ketua BEM',
            'foto' => '', // Sesuaikan dengan path foto yang ada
        ]);

        StrukturBEM::create([
            'nama' => 'John Doe',
            'jabatan' => 'Wakil Ketua BEM',
            'foto' => '',
        ]);

        // Tambahkan anggota lain sesuai kebutuhan
    }
}
