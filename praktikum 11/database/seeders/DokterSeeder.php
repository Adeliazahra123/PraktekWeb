<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokter')->insert([
            [
                'kode' => '001',
                'nama' => 'Budi Santoso',
                'gender' => 'Laki-Laki',
                'tmp_lahir' => 'Sumatra',
                'tgl_lahir' => '2006-01-01',
                'kategori' => 'Dokter Bedah',
                'telpon' => '085883657462',
                'alamat' => 'Depok',
                'Unit Kerja' => 'Rumah Sakit indonesia',
            ],
            [
                'kode' => '002',
                'nama' => 'Adelia Afifatuzzahra',
                'gender' => 'perempuan',
                'tmp_lahir' => 'medan',
                'tgl_lahir' => '2008-09-03',
                'kategori' => 'Dokter Kandungan',
                'telpon' => '089765371012',
                'alamat' => 'Jagakarsa',
                'Unit Kerja' => 'Rumah Sakit Cibubur',
            ],
            [
                'kode' => '002',
                'nama' => 'Abdurrahmah Ziyad',
                'gender' => 'Laki Laki',
                'tmp_lahir' => 'palembang',
                'tgl_lahir' => '2002-01-01',
                'kategori' => 'Dokter Umum',
                'telpon' => '091827219123',
                'alamat' => 'Papua',
                'Unit Kerja' => 'Rumah Sakit jakarta',
            ],
            [
                'kode' => '008',
                'nama' => 'Krisna Panji',
                'gender' => 'laki-laki',
                'tmp_lahir' => 'garut',
                'tgl_lahir' => '2001-01-01',
                'kategori' => 'Dokter anak',
                'telpon' => '089762131212',
                'alamat' => 'Aceh',
                'Unit Kerja' => 'Rumah Sakit Bogor',
            ],
            [
                'kode' => '0005',
                'nama' => 'Sirojul Munir',
                'gender' => 'laki-laki',
                'tmp_lahir' => 'karawang',
                'tgl_lahir' => '1998-01-01',
                'kategori' => 'Dokter umum',
                'telpon' => '098172299122',
                'alamat' => 'Bekasi',
                'Unit Kerja' => 'Rumah Sakit cariu',
        
            ],
        ]);
    }
}
