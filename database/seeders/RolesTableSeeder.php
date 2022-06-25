<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // deleting the existing data
        Role::truncate();
        // creating the dummy data
        Role::create([
            'name'=>'sadmin'

        ]);
        Role::create([
           'name'=>'manger'

        ]);
        Role::create([
           'name'=>'contributor'

        ]);
        Role::create([
           'name'=>'support'
        ]);
    }
}