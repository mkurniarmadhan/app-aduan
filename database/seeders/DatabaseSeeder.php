<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Aduan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'nama' => 'amar',
            'email' => 'amar@gmail.com',
            'no_telpon' => '089694273720',
            'alamat' => 'DIY',
            'password' => bcrypt('amar123')
        ]);
        User::create([
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'no_telpon' => '089694273720',
            'alamat' => 'DIY',
            'password' => bcrypt('admin123'),
            'is_admin' => true
        ]);

        DB::table('kategori_aduan')->insert([
            'kategori_aduan' => 'pelayanan'
        ]);
        DB::table('kategori_aduan')->insert([
            'kategori_aduan' => 'fasilitas'
        ]);
        DB::table('kategori_aduan')->insert([
            'kategori_aduan' => 'pelanggaran'
        ]);
        DB::table('kategori_aduan')->insert([
            'kategori_aduan' => 'aspirasi'
        ]);


        Aduan::create(
            [
                'aduan_id' => 'p-' . str()->lower(Str::random(7)),
                'user_id' => 1,
                'kategori_id' => 1,
                'judul' => 'text',
                'isi' => 'text',
            ]
        );
    }
}
