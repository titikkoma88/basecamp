<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Daurah Ilmu Sharaf'
            ],
            [
                'camp_id' => 1,
                'name' => 'Daurah Ilmu Nahwu'
            ],
            [
                'camp_id' => 1,
                'name' => 'Daurah Ilmu Balaghah'
            ],
            [
                'camp_id' => 1,
                'name' => 'Pengajar dari dan alumni Timur Tengah'
            ],
            [
                'camp_id' => 1,
                'name' => 'Bimbingan Setoran Kosakata'
            ],
            [
                'camp_id' => 1,
                'name' => 'Materi E-Module'
            ],
            [
                'camp_id' => 1,
                'name' => 'E-Sertifikat setiap level'
            ],
            [
                'camp_id' => 2,
                'name' => 'Makhraj Huruf'
            ],
            [
                'camp_id' => 2,
                'name' => 'Ilmu Tajwid'
            ],
            [
                'camp_id' => 2,
                'name' => 'Hafalan surat pendek'
            ],
            [
                'camp_id' => 2,
                'name' => 'Tenaga Pengajar kompeten'
            ],
        ]; 

        CampBenefit::insert($campBenefits);
    }
}
