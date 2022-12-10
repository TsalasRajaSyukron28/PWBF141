<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Vitamin::factory()->create([
            'namaVitamin'=>'A',
        ]);
        \App\Models\Vitamin::factory()->create([
            'namaVitamin'=>'B',
        ]);

        \App\Models\Balita::factory()->create([
            'Nama'=>'Favian',
            'Nik'=>'1234567890987654',
            'Jeniskelamin'=> 'Laki-Laki',
            'Tanggallahir'=>'28-06-2003',
            'Tinggibadan'=>'170',
            'Beratbadan'=>'35',
            'Alamat'=>'Jln Manukan',
            'Namaibu'=>'Endang',
        ]);
    }
}
