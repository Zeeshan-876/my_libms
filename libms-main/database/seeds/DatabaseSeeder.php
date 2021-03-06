<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CreateAdminUserSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleHasPermissionsSeeder::class);
        $this->call(ModelHasRolesSeeder::class);
        $this->call(book_infos::class);
        
    }
}