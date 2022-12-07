<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gerbong;
use App\Models\Kereta;
use App\Models\Penumpang;
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
        Penumpang::factory(100)->create();

        Gerbong::factory(10)->create();

        Kereta::factory()->create([
            'nama_kereta'   => 'KA Argo Bromo Anggrek',
            'tipe'          => 'Luxury',
            'masinis'       => 'Wawan Setiyawan',
            'stasiun'       => 'Stasiun Surabaya Gubeng',
            'tujuan'        => 'Surabaya',
        ]);
        
        Kereta::factory()->create([
            'nama_kereta'   => 'KA Argo Lawu',
            'tipe'          => 'Luxury',
            'masinis'       => 'Ahmad Sepriansyah',
            'stasiun'       => 'Stasiun Solo Balapan',
            'tujuan'        => 'Solo',
        ]);

        Kereta::factory()->create([
            'nama_kereta'   => 'KA Cikuray',
            'tipe'          => 'Ekonomi',
            'masinis'       => 'Billy Ngabehi',
            'stasiun'       => 'Stasiun Garut',
            'tujuan'        => 'Garut',
        ]);

        Kereta::factory()->create([
            'nama_kereta'   => 'KA Rajabasa',
            'tipe'          => 'Ekonomi',
            'masinis'       => 'Fauzi Lavezzi',
            'stasiun'       => 'Stasiun Tanjungkarang',
            'tujuan'        => 'Tanjungkarang',
        ]);

        Kereta::factory()->create([
            'nama_kereta'   => 'KA Argo Sindoro',
            'tipe'          => 'Eksekutif',
            'masinis'       => 'Jevi Santosa',
            'stasiun'       => 'Stasiun Semarang Tawang',
            'tujuan'        => 'Semarang',
        ]);
    }
}
