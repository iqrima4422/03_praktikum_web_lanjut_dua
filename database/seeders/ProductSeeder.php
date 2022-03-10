<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'product' => 'Salad Sayur',
                'jenis' => 'Makanan',
                'manfaat' => 'Mengandung vitamin A, C, E, dan Asam Folat',
                'harga' => 20000,
                'gambar' =>'asset/img/gambar1.png'
            ],
            [
                'product' => 'Teh Hijau',
                'jenis' => 'Minuman',
                'manfaat' => 'Mencegah resiko diabetes',
                'harga' => 15000,
                'gambar' =>'asset/img/gambar2.png'
            ],
            [
                'product' => 'Sepeda',
                'jenis' => 'Olahraga',
                'manfaat' => 'Menjaga kesehatan jantung',
                'harga' => 1500000,
                'gambar' =>'asset/img/gambar3.png'
            ],
            [
                'product' => 'Masker',
                'jenis' => 'Kecantikan',
                'manfaat' => 'Mencerahkan wajah',
                'harga' => 10000,
                'gambar' =>'asset/img/gambar4.png'
            ]
        ]);
    }
}