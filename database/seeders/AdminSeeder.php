<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('power@123'),
            ],
            [
                'name' => 'Brunno',
                'email' => 'brunno@mail.com',
                'password' => bcrypt('brunno@123'),
            ],
        ];

        foreach ($admins as $admin) {
            $user = \App\Models\User::where('email', $admin['email'])->first();

            if ($user) {
                $user->update($admin);
                continue;
            }

            \App\Models\User::create($admin);
        }
    }
}
