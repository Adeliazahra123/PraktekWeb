<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Unit_kerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit_kerja')->insert([
         [
                'id' => '001',
                'nama' => 'rumah sakit Indonesia
                ',
                
            ],
            [
                'id' => '002',
                'nama' => 'rumah sakit cibubur
                ',
                
            ],
            [
                'id' => '002',
                'nama' => 'rumah sakit Jakarta
                ',
               
            ],
            [
                'id' => '008',
                'nama' => 'rumah sakit bogor
                ',
               
            ],
            [
                'id' => '0005',
                'nama' => 'rumah sakit cariu',
               
            ],
        ]);
    }
}
