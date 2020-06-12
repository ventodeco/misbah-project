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
        $user = User::create([
        	'name' => 'Misbah Project',
        	'email' => 'misbah@project.com',
        	'password' => bcrypt('misbahproject'),
            'email_verified_at' => now(),
        ]);

        $user->assignRole('admin');

    }
}
