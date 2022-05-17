<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name' => 'Supervisor',
            'description' => 'Office of the Supervisor',
        ]);

        Department::create([
            'name' => 'Highway',
            'description' => 'Highway Department',
        ]);

        Department::create([
            'name' => 'Clerk',
            'description' => 'Town Clerk',
        ]);
    }
}
