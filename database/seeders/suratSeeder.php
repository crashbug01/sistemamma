<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\surat;

class suratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        surat::create([
            'nama_surat' => 'An-Naba',
            'no_surat' => '78',
            'juz' => '30'
        ]);

        surat::create([
            'nama_surat' => 'An-Naziat',
            'no_surat' => '79',
            'juz' => '30'
        ]);
    }
}
