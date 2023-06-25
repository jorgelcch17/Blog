<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Role1 = Role::create(['name' => 'admin']);
        $Role2 = Role::create(['name' => 'Blooger']);

        Permission::create(['name'=> 'admin.home'])->syncRoles([$Role1, $Role2]);

        
        Permission::create(['name'=> 'admin.users.index'])->syncRoles([$Role1]);
        Permission::create(['name'=> 'admin.users.edit'])->syncRoles([$Role1]);
        Permission::create(['name'=> 'admin.users.update'])->syncRoles([$Role1]);

        Permission::create(['name'=> 'admin.categories.index'])->syncRoles([$Role1]);
        Permission::create(['name'=> 'admin.categories.create'])->syncRoles([$Role1]);
        Permission::create(['name'=> 'admin.categories.edit'])->syncRoles([$Role1]);
        Permission::create(['name'=> 'admin.categories.destroy'])->syncRoles([$Role1]);

        Permission::create(['name'=> 'admin.tags.index'])->syncRoles([$Role1]);
        Permission::create(['name'=> 'admin.tags.create'])->syncRoles([$Role1]);
        Permission::create(['name'=> 'admin.tags.edit'])->syncRoles([$Role1]);
        Permission::create(['name'=> 'admin.tags.destroy'])->syncRoles([$Role1]);

        Permission::create(['name'=> 'admin.posts.index'])->syncRoles([$Role1, $Role2]);
        Permission::create(['name'=> 'admin.posts.create'])->syncRoles([$Role1, $Role2]);
        Permission::create(['name'=> 'admin.posts.edit'])->syncRoles([$Role1, $Role2]);
        Permission::create(['name'=> 'admin.posts.destroy'])->syncRoles([$Role1, $Role2]);

    }
}
