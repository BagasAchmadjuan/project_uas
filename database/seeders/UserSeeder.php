<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin User
        $admin = new User;
        $admin->nama = "Bagas Achmadjuan";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt('12345');
        $admin->level = 1; // Level Admin
        $admin->alamat = "Kota Sukabumi,Ciaul";
        $admin->tanggallahir = "1990-01-01";
        $admin->foto = "default.jpg"; // Perhatikan disini
        $admin->folder = 'public/assets/img/user';
        $admin->save();

        // Regular User
        $user = new User; // Perhatikan variabel disini
        $user->nama = "Bagus Santana";
        $user->email = "user@gmail.com";
        $user->password = bcrypt('12345');
        $user->level = 2; // Level User
        $user->alamat = "Kota Sukabumi,Sukaraja";
        $user->tanggallahir = "1995-01-01";
        $user->foto = "default.jpg";
        $user->folder = 'public/assets/img/user';
        $user->save();
    }
}
