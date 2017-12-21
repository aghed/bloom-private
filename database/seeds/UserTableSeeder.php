<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_customer = Role::where('name', 'customer')->first();
        $role_admin  = Role::where('name', 'admin')->first();

        $employee = new User();
        $employee->name = 'Ali Ibrahim';
        $employee->email = 'user@example.com';
        $employee->password = bcrypt('secret');
        $employee->save();
        $employee->roles()->attach($role_customer);

        $manager = new User();
        $manager->name = 'Tariq Abu Samra';
        $manager->email = 'admin@example.com';
        $manager->password = bcrypt('admin123123');
        $manager->save();
        $manager->roles()->attach($role_admin);
    }
}
