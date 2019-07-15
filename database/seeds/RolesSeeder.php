<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rolesList = [
            [
                'name' => 'administrator',
                'guard_name' => 'web'
            ],
            [
                'name' => 'moderator',
                'guard_name' => 'web'
            ],
        ];

        foreach ($rolesList as $role) {
            Role::query()->firstOrCreate($role);
        }
    }
}
