<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periksa')->insert([
            [
                'kode' => '001',
                'nama' => 'Budi Santoso',
                'Dokter' => 'Angelica',
                'tanggal' => '2006-01-01',
                'berat' => '30',
                'tinggi' => '180',
                'keterangan' => 'asam lambung',
            ],
            [
                'kode' => '002',
                'nama' => 'Adelia Afifatuzzahra',
                'Dokter' => 'Hasan',
                'tanggal' => '2006-13-01',
                'berat' => '39',
                'tinggi' => '159',
                'keterangan' => 'paru paru',
            ],
            [
                'kode' => '002',
                'nama' => 'yahya zulkarnain',
                'Dokter' => 'rusmanto',
                'tanggal' => '2006-09-02',
                'berat' => '36',
                'tinggi' => '177',
                'keterangan' => 'migran',
            ],
            [
                'kode' => '008',
                'nama' => 'Kamil',
                'Dokter' => 'Regi',
                'tanggal' => '2006-09-01',
                'berat' => '37',
                'tinggi' => '166',
                'keterangan' => 'sehat',
            ],
            [
                'kode' => '0005',
                'nama' => 'Sindi',
                'Dokter' => 'zahra',
                'tanggal' => '2006-06-07',
                'berat' => '55',
                'tinggi' => '187',
                'keterangan' => 'sehat',
        
            ],
        ]);
    }
}
