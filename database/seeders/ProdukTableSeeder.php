<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Make sure to import DB

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
            [
                'nama' => 'Altura Gold Arabica',
                'harga' => 125000,
                'stok' => 88,
                'berat' => 200,
                'deskripsi' => 'Kopi Arabika premium dari dataran tinggi pilihan, hadirkan cita rasa elegan dan berkelas.',
                'thumbnail' => NULL,
                'kategori_id' => 1,
            ],
            [
                'nama' => 'Senandung Pagi Arabika',
                'harga' => 85000,
                'stok' => 150,
                'berat' => 250,
                'deskripsi' => 'Awali hari dengan secangkir kopi aromatik yang menenangkan jiwa dari biji Arabika terbaik.',
                'thumbnail' => NULL,
                'kategori_id' => 1,
            ],
            [
                'nama' => 'Semangat Bara Robusta',
                'harga' => 65000,
                'stok' => 210,
                'berat' => 250,
                'deskripsi' => 'Tendangan kuat dari Robusta pilihan untuk menemani aktivitas padat dan membakar semangat Anda.',
                'thumbnail' => NULL,
                'kategori_id' => 2,
            ],
            [
                'nama' => 'Benteng Lampung Robusta',
                'harga' => 95000,
                'stok' => 95,
                'berat' => 500,
                'deskripsi' => 'Karakter kuat dan bold dari Kopi Robusta asli Lampung yang legendaris dalam kemasan besar.',
                'thumbnail' => NULL,
                'kategori_id' => 2,
            ],
            [
                'nama' => 'Permata Khatulistiwa Liberika',
                'harga' => 180000,
                'stok' => 45,
                'berat' => 200,
                'deskripsi' => 'Rasakan pengalaman unik dari kopi langka Liberika dengan aroma buah nangka yang eksotis.',
                'thumbnail' => NULL,
                'kategori_id' => 3,
            ],
            [
                'nama' => 'Eksotika Meranti',
                'harga' => 175000,
                'stok' => 50,
                'berat' => 200,
                'deskripsi' => 'Kopi Liberika single origin dari Kepulauan Meranti, sebuah mahakarya rasa yang tak terlupakan.',
                'thumbnail' => NULL,
                'kategori_id' => 3,
            ],
            [
                'nama' => 'Harta Tersembunyi Excelsa',
                'harga' => 195000,
                'stok' => 33,
                'berat' => 150,
                'deskripsi' => 'Sebuah harta karun bagi para penikmat kopi sejati, hadirkan profil rasa kompleks yang memukau.',
                'thumbnail' => NULL,
                'kategori_id' => 4,
            ],
            [
                'nama' => 'Pusaka Borneo Excelsa',
                'harga' => 210000,
                'stok' => 25,
                'berat' => 200,
                'deskripsi' => 'Kopi Excelsa warisan dari tanah Borneo, menawarkan simfoni rasa asam buah dan pahit yang seimbang.',
                'thumbnail' => NULL,
                'kategori_id' => 4,
            ],
            [
                'nama' => 'Floria Kintamani',
                'harga' => 115000,
                'stok' => 112,
                'berat' => 200,
                'deskripsi' => 'Kopi Arabika dari Kintamani, Bali, dengan sentuhan segar aroma bunga dan citrus khas.',
                'thumbnail' => NULL,
                'kategori_id' => 1,
            ],
            [
                'nama' => 'Gebrakan Pagi',
                'harga' => 55000,
                'stok' => 300,
                'berat' => 250,
                'deskripsi' => 'Pilihan tepat untuk suntikan kafein instan dari Robusta berkualitas dengan harga terjangkau.',
                'thumbnail' => NULL,
                'kategori_id' => 2,
            ],
        ]);
    }
}