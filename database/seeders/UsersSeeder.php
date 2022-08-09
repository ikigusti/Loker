<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
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
        $adminRole = new Role;
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin Loker";
        $adminRole->save();

        // $memberRole = new Role;
        // $memberRole->name = "member";
        // $memberRole->display_name = "Member Larapus";
        // $memberRole->save();

        //membuat sample admin
        $admin = new User;
        $admin->name = "Admin Loker";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt("rahasia");
        $admin->save();
        $admin->attachRole($adminRole);

        //membuat sample member
        // $member = new User;
        // $member->name = "Member Larapus";
        // $member->email = "member@gmail.com";
        // $member->password = bcrypt("rahasia");
        // $member->save();
        // $member->attachRole($memberRole);

    }
}
