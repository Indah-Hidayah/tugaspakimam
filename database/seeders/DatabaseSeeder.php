<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cart;
use App\Models\order;
use App\Models\produk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'=>'indah',
            'email'=>'indah@gmail.com',
            'password'=>bcrypt('123456')
        ]);
        User::create([
            'name'=>'indahhid',
            'email'=>'indahhid@gmail.com',
            'password'=>bcrypt('12345')
        ]);

        produk::create([
            'name' => 'FACETOLOGY',
            'deskripsi' => 'FACE WASH',
            'harga' => '120000',
            'foto' => 'face wash2.jpg',
        ]);
        produk::create([
            'name' => 'FACETOLOGY',
            'deskripsi' => 'SUNSCREEN',
            'harga' => '120000',
            'foto' => 'sunscreeen.jpg',
        ]);
        produk::create([
            'name' => 'FACETOLOGY',
            'deskripsi' => 'MICELLA WATER',
            'harga' => '120000',
            'foto' => 'micellar water.webp',
        ]);
        produk::create([
            'name' => 'FACETOLOGY',
            'deskripsi' => 'LIP CARE',
            'harga' => '120000',
            'foto' => 'lip care.png',
        ]);
        produk::create([
            'name' => 'FACETOLOGY',
            'deskripsi' => 'TONER',
            'harga' => '120000',
            'foto' => 'toner1.png',
        ]);
        produk::create([
            'name' => 'FACETOLOGY',
            'deskripsi' => 'MOISTUREZER',
            'harga' => '120000',
            'foto' => 'moist.png',
        ]);

        order::create([
            'name' => 'FACETOLOGY',
            'email' => 'indah1@gmail.com',
            'alamat' => 'singaparna',
            'kota' => 'tasikmalaya',
            'kode_pos' => '4641',
            // 'metode_pembayaran' => 'COD',

        ]);
    }
}
