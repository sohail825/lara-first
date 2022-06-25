<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        $sadminrole = Role::where('name','sadmin')->first();
        $managerole = Role::where('name','manger')->first();
        $contributorrole = Role::where('name','contributor')->first();
        $supportrole = Role::where('name','support')->first();

        $sadmin = User::create([
            'name'=>'Sohail',
            'email'=>'sohail12@gmail.com',
            'password'=>Hash::make('123456789')
        ]);
        $cont = User::create([
            'name'=>'Ahmad',
            'email'=>'ahmad@gmail.com',
            'password'=>Hash::make('123456789')
        ]);
        $mng = User::create([
            'name'=>'jutt',
            'email'=>'jutt@gmail.com',
            'password'=>Hash::make('123456789')
        ]);
        $spt = User::create([
            'name'=>'tajamal',
            'email'=>'tajamal@gmail.com',
            'password'=>Hash::make('123456789')
        ]);
        $sadmin->roles()->attach($sadminrole);
        $cont->roles()->attach($contributorrole);
        $mng->roles()->attach($managerole);
        $spt->roles()->attach($supportrole);
    }
}