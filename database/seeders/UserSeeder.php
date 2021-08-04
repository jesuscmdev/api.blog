<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Jesus Cortes',
            'email'     => 'g.zuscm@gmail.com',
            'password'  => bcrypt('jesuscm01')
        ]);

        User::factory(99)->create();
    }
}
