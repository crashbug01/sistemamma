<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\peserta;

class pesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        peserta::create([
            'nama' => 'Ahmad Fauzan',
            'jenis_kelamin' => 'laki-laki',
            'no_whatsapp' => '6281200000001',
            'surat_id' => '1',
            'jam_belajar' => '08.00-9.00',
            'status' => 'aktif',
        ]);

        peserta::create([
            'nama' => 'Siti Aisyah',
            'jenis_kelamin' => 'perempuan',
            'no_whatsapp' => '6281200000002',
            'surat_id' => '1',
            'jam_belajar' => '09.00-10.00',
            'status' => 'aktif',
        ]);
    }
}
