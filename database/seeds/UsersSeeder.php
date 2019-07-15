<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::query()->firstOrCreate([
            'email' => 'admin@example.com',
            'name'=> 'Administrator',
            'password' => 'a526817d380fa2c2fcb61643f840fbe1'
        ]);
        $admin->assignRole(['administrator']);

        $moder = User::query()->firstOrCreate([
            'email' => 'moder@example.com',
            'name'=> 'Moderator',
            'password' => 'd8414cc7be164e55302dd1edf060217b'
        ]);
        $moder->assignRole(['moderator']);
    }
}
