<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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

        // \App\Models\Vitamin::create([
        //     'namaVitamin'=>'A',
        //     'id_balita'=>1,
        //     'saran'=>'matio'
        // ]);
        // \App\Models\Vitamin::create([
        //     'namaVitamin'=>'B',
        // ]);

        // \App\Models\Balita::create([
        //     'Nama'=>'Favian',
        //     'Nik'=>'1234567890987654',
        //     'Jeniskelamin'=> 'Laki-Laki',
        //     'Tanggallahir'=>'2003-10-10',
        //     'Tinggibadan'=>'170',
        //     'Beratbadan'=>'35',
        //     'Alamat'=>'Jln Manukan',
        //     'Namaibu'=>'Endang',
        // ]);
        User::create([
            'name'=>'tes',
            'email'=>'tes@tes.com',
            'password'=>bcrypt('123'),
            'role'=> 'admin'
        ]);

        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin123'),
            'role'=> 'admin'
        ]);
    }
}
