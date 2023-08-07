<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas=[
            ['nama_kelas' => 'SIB 2A',],
            ['nama_kelas' => 'SIB 2B',],
            ['nama_kelas' => 'SIB 2C',],
            ['nama_kelas' => 'SIB 2D',],
            ['nama_kelas' => 'SIB 2E',],
            ['nama_kelas' => 'SIB 2F',],
        ];

        DB::table('kelas')->insert($kelas);
    }
}
