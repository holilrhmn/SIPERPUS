<?php

use Illuminate\Database\Seeder;
use App\User;
class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::Create([
            'name' => 'Admin Perpustakaan',
            'email' => 'admin@perpus.mail',
            'password' =>bcrypt('admin123'),
            'email_verified_at' => now(),
        ]);

        $user->assignRole('admin');
    }
}
