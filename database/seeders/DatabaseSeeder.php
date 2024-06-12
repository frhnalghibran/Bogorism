<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\User;
use App\Models\Wisata;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'username' => 'user',
        //     'password' => Hash::make('123'),
        //     'role' => 'user'
        // ]);
        
        User::create([
            'username' => 'admin',
            'password' => Hash::make('123'),
            'role' => 'admin'
        ]);
        

        Kategori::create([
            'nama' => 'Wisata'
        ]);
        Kategori::create([
            'nama' => 'Kuliner'
        ]);
        
        Wisata::create([
            'nama' => 'Kebun Raya Bogor',
            'lokasi' => 'Jl. Ir. H. Juanda No.13, Paledang, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat',
            'deskripsi' => 'Kebun Raya Bogor atau Kebun Botani Bogor adalah sebuah kebun botani besar yang terletak di Kota Bogor, Indonesia. Kebun ini dioperasikan oleh Badan Riset dan Inovasi Nasional. Kebun ini terletak di pusat kota Bogor dan bersebelahan dengan kompleks istana kepresidenan Istana Bogor.',
            'operasional' => ' Setiap Hari 08.00 - Selesai',
            'kategori_id' => 1,
            'gambar' => 'img/home2.jpg'
        ]);
  
        Wisata::create([
            'nama' => 'Gurih 7 Bogor - Saung Lesehan & Kuliner Sunda',
            'lokasi' => 'Jl. Raya Pajajaran No.102, Bantarjati, Kec. Bogor Utara, Kota Bogor, Jawa Barat',
            'deskripsi' => 'Restoran terbuka kasual yang menyajikan hidangan rumahan khas Indonesia dan masakan khas Sunda.',
            'operasional' => 'Setiap Hari 10.00 - 22.00',
            'kategori_id' => 2,
            'gambar' => 'img/test.jpg'
        ]);
    }
}
